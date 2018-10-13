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
}