<?php

class DataBase
{
        private $DB;
        public function __construct(mysqli $DB)
        {
            $this->DB=$DB;
        }
        public function getAllData(): array
        {
            $result = [];
            $res=$this->DB->query('SELECT * FROM product');
            while ($row = $res->fetch_assoc()){
                $result[$row['id']] = $row;
            }
            return $result;
        }

        public function insert(string $name, string $description, float $price, string $pic):bool
        {
            $query="
          INSERT INTO product values ('id', '$name', '$description', '$price', '$pic');";
          return $this->DB->query($query);
        }

        public function delete(int $id): bool
        {
            $query="
            DELETE FROM product WHERE id = $id";
            return $this->DB->query($query);
        }

    public function update(int $productId,string $proName,string $description,float $price,string $picture):bool {
            $query = "UPDATE product SET `name` = '" . $proName . "', `description` = '" . $description . "', `price` = '" . $price . "', `picture` = '" . $picture . "' WHERE `id` = '" . $productId . "'";
            return $this->DB->query($query);
    }


}
?>
