<?php
    trait Collect {
        public function AddProduct(&$arr) {
            $arr[]=$this;
        }
    }
    class Product {
        protected $id;
        protected $name;
        protected $price;
        protected $description;
        protected $brand;
        
        function __construct($id, $n, $p, $d, $b) {
            $this->id = $id;
            $this->name = $n;
            $this->price = $p;
            $this-> description = $d;
            $this-> brand = $b;
        }  
        protected function getProduct() {
            $str = "<b>Name:</b> {$this->name}, ";
            $str .= "<b>Price:</b> {$this->price}$, ";
            $str .= "<b>Description:</b> {$this->description}, ";
            $str .= "<b>Brand:</b> {$this->brand}";
            return $str;
        }   
        function getId() {
            return $this->id;
        }
    }

//     Сделать класс Phone производным от класса Product
// с полями cpu, ram, countSim, hdd, os.
    class Phone extends Product {
        use Collect;
        protected $cpu;
        protected $ram;
        protected $countSim;
        protected $hdd;
        protected $os;
        function __construct($id, $n, $p, $d, $b, $c, $r, $cS, $h, $o) {
            parent::__construct($id, $n, $p, $d, $b);
            $this->cpu = $c;
            $this->ram = $r;
            $this->countSim = $cS;
            $this->hdd = $h;
            $this->os = $o;
        }
        function getProduct() {
            $str = parent::getProduct();
            $str .= ", CPU: {$this->cpu}, ";
            $str .= "RAM: {$this->ram}, ";
            $str .= "Count Sim: {$this->countSim}, ";
            $str .= "HDD: {$this->hdd}, ";
            $str .= "OS: {$this->os}";
            return $str;
        }
    }

    class Monitor extends Product {
        use Collect;
        protected $diagonal;
        protected $frequency;
        protected $ports;
        function __construct($id, $n, $p, $d, $b, $di, $f, $po) {
            parent::__construct($id, $n, $p, $d, $b);
            $this->diagonal = $di;
            $this->frequency = $f;
            $this->ports = $po;
        }
        function getProduct() {
            $str = parent::getProduct();
            $str .= ", Diagonal: {$this->diagonal}, ";
            $str .= "Frequency: {$this->frequency}, ";
            $str .= "Ports: {$this->ports}";
            return $str;
        }
    }

    

?>