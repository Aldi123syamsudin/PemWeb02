<!DOCTYPE html>
<html>
<head>
	<title>Luas Permukaan Bola</title>
	<style>
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.result {
			background-color: #f5f5f5;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 20px;
			text-align: center;
			font-size: 20px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="result">
			<?php
			class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        public function __construct($panjang, $lebar, $tinggi) {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
            $this->tinggi = $tinggi;
        }
    
        public function hitungVolume() {
            return $this->panjang * $this->lebar * $this->tinggi;
        }
    
        public function hitungLuasPermukaan() {
            return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
        }
    }
    
    // Contoh penggunaan
    $balok = new Balok(5, 7, 10);
    echo "Volume Balok = " . $balok->hitungVolume() . "<br>";
    echo "Luas Permukaan Balok = " . $balok->hitungLuasPermukaan();
    
            
			?>
		</div>
	</div>
</body>
</html>
