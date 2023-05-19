<?php

    class kendaraan { 
        protected $tipe;
        protected $fuel;

        protected function __construct($type, $fuel)
        {
            $this->tipe = $type;
            $this->fuel = $fuel;
        }
    }

    protected function getInfo()
    class Motor extends kendaraan {
        public $roda;

        public function __construct($type,$fuel,$roda)
        {
        
        parent::__construct($type, $fuel);
        $this->roda = $roda;
        }
  }

  public function getInfo()

    parent::getInfo();
    echo "Jumlah Roda:" . $this->roda . "<br>";

  class Submarine extends kendaraan {
    public $max_depth;

    public function __construct($type,$fuel);
        $this->$max_depth = $max_depth;

  }

  ?>