<?PHP
	class reservation{
		private  $Ncin = null;
		private  $depart = null;
		private  $destination = null;
	    private  $date_res = null;
		
		function __construct(int $Ncin, string $depart, string $destination, string $date_res ){
			
			$this->Ncin=$Ncin;
			$this->depart=$depart;
			$this->destination=$destination;
			$this->date_res= $date_res;
		}
		
		function getNcin() {
			return $this->Ncin;
		}
		function getdate_res() {
			
			return $this->date_res;
		}
		function getheurer() {
			return $this->heurer;
		}
		function getdepart() {
			return $this->depart;
		}
		function getdestination(){
			return $this->destination;
		}
		function getprix() {
			return $this->prix;
		}

		function setNcin(string $Ncin){
			$this->Ncin=$Ncin;
		}
		function setdate_res(string $date_res){
			$this->date_res=$date_res;
		}
		function setheurer(date $heurer){
			$this->heurer=$heurer;
		}
		function setdepart(string $depart){
		$this->depart=$depart;
		}
		function setdestination(string $destination){
			$this->destination=$destination;
		}
	}
?>