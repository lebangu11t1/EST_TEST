<?php

class Work
{
    public $id;
    public $work_name;
    public $starting_date;
    public $ending_date;
    public $status;
    public $deleted_at;

    function __construct(
        $id,
        $work_name,
        $starting_date,
        $ending_date,
        $status,
        $deleted_at
    )
    {
        $this->id               = $id;
        $this->work_name        = $work_name;
        $this->starting_date    = $starting_date;
        $this->ending_date      = $ending_date;
        $this->status           = $status;
        $this->deleted_at       = $deleted_at;
    }

    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM works WHERE id = :id');
        $req->execute(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['id'])) {
            return new Work(
                $item['id'],
                $item['work_name'],
                $item['starting_date'],
                $item['ending_date'],
                $item['status'],
                $item['deleted_at']
            );
        }
        return null;
    }

    static function all()
    {
        $list = [];
        $db   = DB::getInstance();
        $req  = $db->query('SELECT * FROM works');

        foreach ($req->fetchAll() as $item) {
            $list[] = new Work(
                $item['id'],
                $item['work_name'],
                $item['starting_date'],
                $item['ending_date'],
                $item['status'],
                $item['deleted_at']
            );
        }

        return $list;
    }

    static function create($data)
    {
        $work_name     = $data['work_name'];
        $starting_date = $data['starting_date'];
        $ending_date   = $data['ending_date'];
        $status        = 1;

        $db   = DB::getInstance();
        $sql  = "INSERT INTO works (work_name, starting_date, ending_date, status, deleted_at)
                 VALUES ('".$work_name."', '".$starting_date."', '".$ending_date."', $status, null)";

        if ($db->query($sql) === TRUE) {
            echo "New record created successfully";
        }
    }

    static function update($id, $data)
    {
        $work_name     = $data['work_name'];
        $starting_date = $data['starting_date'];
        $ending_date   = $data['ending_date'];

        $db   = DB::getInstance();
        $sql  = "UPDATE works SET 
                work_name='".$work_name."', 
                starting_date='".$starting_date."', 
                ending_date='".$ending_date."' 
                WHERE id='".$id."'";

        if ($db->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $db->error;
        }
    }
}