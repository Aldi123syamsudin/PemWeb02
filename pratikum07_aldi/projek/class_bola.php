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
			class Bola {
                private $jariJari;
            
                public function __construct($jariJari) {
                    $this->jariJari = $jariJari;
                }
            
                public function hitungVolume() {
                    return 4 / 3 * pi() * pow($this->jariJari, 3);
                }
            
                public function hitungLuasPermukaan() {
                    return 4 * pi() * pow($this->jariJari, 2);
                }
            }
            
            $bola = new Bola(7.5);
            echo "Volume Bola = " . $bola->hitungVolume() . "<br>";
            echo "Luas Permukaan Bola = " . $bola->hitungLuasPermukaan();
            
			?>
		</div>
	</div>
</body>
</html>
