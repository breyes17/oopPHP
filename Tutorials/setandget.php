<? 
// __set and __get method

// 3 different ways to access the private

class Post{
    private $name;
    public function __set($name,$value){
        echo "Setting ".$name." to ".$value."<br>";
        $this->name=$value;
    }

    public function __get($name){
        echo "Getting ".$name." to ".$this->name."<br>";
    }

    public function __isset($name){
        echo "Is ".$name." is set?";
        return isset($this->name);
    }
}

$p = new Post;
$p->name="testing";
echo $p->name;
var_dump(isset($p->name));
?>