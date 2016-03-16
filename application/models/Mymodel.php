 <?php
// include_once("model/Book.php");
// class Model {
//     public function getBookList()
//     {
//         // here goes some hardcoded values to simulate the database
//         return array(
//             "Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
//             "Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
//             "PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
//         );
//     }
//     public function getBook($title)
//     {
//         // we use the previous function to get all the books 
//         // and then we return the requested one.
//         // in a real life scenario this will be done through 
//         // a database select command
//         $allBooks = $this->getBookList();
//         return $allBooks[$title];
//     }
// }
    class Mymodel extends  CI_Model{
        public $conn = null;

        public function __construct(){
            parent::__construct();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mvc";

            //Create connection
            $this->conn = new mysqli($servername,$username,$password,$dbname);
            //Check connection
            if($this->conn->connect_error){
                die("Connection failed:".$conn->connect_error);
            }
        }
        public function getHotelList()
        {
            // return array(
            //     "DUBAI" => new Hotel("DUBAI","Atlantis - The Palm",1),
            //     "LONDON" => new Hotel("LONDON","Hilton Hotel",2),
            //     "LAS VEGAS" => new Hotel("LAS VEGAS","MGM Ground",3),
            //     "AUSTRALIA" => new Hotel("AUSTRALIA","Crown Casino",4)
            // );
            $sql = "SELECT country,hotel_name,id FROM Hotel";
            $result = $this->conn->query($sql);
            $hotel = null;
            if($result->num_rows > 0){
                //var_dump ($result->fetch_array());
                // return $result->fetch_assoc();
                while ($row = $result->fetch_assoc()) {
                    $hotel[] = $row;
                }
                return $hotel;
            }
        }

        public function getHotel($num){
            $hotel = $this->getHotelList();
            foreach ($hotel as $key => $value) {
                if ($value['id'] == $num) {
                    return $value;
                }
            }
        }

        public function getSpecificHotelList($name){
            // $sql = "SELECT country,hotel_name,id FROM Hotel WHERE hotel_name LIKE `% ".$name."%` OR country LIKE `%".$name."$" ;
            $sql = "SELECT * FROM Hotel WHERE hotel_name LIKE '%$name%' OR country LIKE '%$name%'";
            $result = $this->conn->query($sql);
            // var_dump($name);
            $hotel = null;
            if($result->num_rows > 0){
                //var_dump ($result->fetch_array());
                // return $result->fetch_assoc();
                while ($row = $result->fetch_assoc()) {

                    $hotel[] = $row;
                }
                return $hotel;
            }
        }

        public function isUserLoggedIn($userName,$password){
            $sql = "SELECT * FROM userInfo WHERE  userName = '$userName' AND password = '$password'";
            $result = $this->conn->query($sql);
            if(!empty($result)){
                return true;
            }
        }

    }
 ?>
