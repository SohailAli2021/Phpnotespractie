<?php
class City{
    //Properties

    public $cityname;
    public $countryname;
    //method



    public function get_cityname()
    {
        return $this->cityname;
    }


    public function get_countryname()
    {
        return $this->countryname;
    }


    public function set_cityname($cityname)
    {
        $this->cityname =$cityname;
    }

    
    public function set_countryname($countryname)
    {
        $this->countryname =$countryname;
    }

}





// $cityname = new City();
// $cityname->set_cityname('Karachi');
// echo $cityname->get_cityname();
// $countryname = new City();
// $countryname->set_countryname('Pakistan');
// echo $countryname->get_countryname();


$pak = new City();
$pak->set_cityname("Karachi");
$pak->set_countryname('pakistan');
echo $pak->get_cityname();
echo $pak->get_countryname();

echo "<br>";

$Afganistan = new City();
$Afganistan->set_cityname('Kabul');
$Afganistan->set_countryname('Afganistan');
echo $Afganistan->get_cityname();
echo $Afganistan->get_countryname();










?>