
//-------------
/*

Имеется два класса(см. ниже).
В каждом классе есть приватная переменная с данными и нужно в классе A создать
экземпляр класса B и в конструктор передать данные,
но чтоб не хранить данные в двух классах я хочу передать ссылку

class B {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }
}

class A {
    private $data = "abc";

    public function b() {
        $q = new B(&$this->data);
    }
}

$a = new A();
$a->b();


Заменить

public function __construct($data) {
    $this->data = $data;
}

на

public function __construct(&$data) {
    $this->data = $data;
}

и вызывать

$q = new B($this->data);
*/