<?php
echo '<br>======================================================================<br>';
echo '<b>Пример №# - someInterface.php</b> Interface<br>';
echo '('.__FILE__.')'.'<br>';


// Шаг 1: Описание проблемы (https://ruseller.com/lessons.php?id=717&rub=37)

// Допустим у нас есть класс Article, который управляет статьями на сайте.
// Он содержит информацию о статье, включая заголовок, автора, дату создания и категорию.

// Класс выглядит примерно так
  // class poly_base_Article {
  //     public $title;
  //     public $author;
  //     public $date;
  //     public $category;

  //     public function  __construct($title, $author, $date, $category = 0) {
  //         $this->title = $title;
  //         $this->author = $author;
  //         $this->date = $date;
  //         $this->category = $category;
  //     }
  // }
  //Теперь надо добавить методы для вывода информации в разных форматах, таких как XML и JSON.

  //Шаг 2: Определяем интерфейс
  interface poly_writer_Writer {
    public function write(poly_base_Article $obj);
  }

  //Шаг 3: Создаем реализацию
  //Вот код XMLWriter:
  class poly_writer_XMLWriter implements poly_writer_Writer {
      public function write(poly_base_Article $obj) {
          $ret = '<article>';
          $ret .= '<title>' . $obj->title . '</title>';
          $ret .= '<author>' . $obj->author . '</author>';
          $ret .= '<date>' . $obj->date . '</date>';
          $ret .= '<category>' . $obj->category . '</category>';
          $ret .= '</article>';
          return $ret;
      }
  }

  //А вот код класса JSONWriter:
  class poly_writer_JSONWriter implements poly_writer_Writer {
      public function write(poly_base_Article $obj) {
          $array = array('article' => $obj);
          return json_encode($array);
      }
  }

  //Шаг 4: Используем наши реализации
  // class poly_base_Article {
  //     //...
  //     public function write(poly_writer_Writer $writer) {
  //         return $writer->write($this);
  //     }
  // }


    class poly_base_Article {
      public $title;
      public $author;
      public $date;
      public $category;

      public function  __construct($title, $author, $date, $category = 0) {
          $this->title = $title;
          $this->author = $author;
          $this->date = $date;
          $this->category = $category;
      }

      public function write(poly_writer_Writer $writer) {
          return $writer->write($this);
      }
  }


  //Получаем объект Writer
  class poly_base_Factory {
      public static function getWriter() {
          // перехватываем переменную запроса
          // $format = $_REQUEST['format'];
          $format='JSON';
          //debug($_SERVER);
          exit;

          // конструируем имя нашего класса и проверяем его существование
          $class = 'poly_writer_' . $format . 'Writer';
          if(class_exists($class)) {
              // возвращаем новый объект Writer
              return new $class();
          }
          // иначе выдаем сообщение об ошибке
          throw new Exception('Не поддерживаемый формат');
      }
  }

  //Шаг 5: Соединяем все вместе
  $article = new poly_base_Article('Polymorphism ', 'Steve ', time()-3600, 10);
  try {
      $writer = poly_base_Factory::getWriter();
  }
  catch (Exception $e) {
      $writer = new poly_writer_XMLWriter();
  }
  echo $article->write($writer);