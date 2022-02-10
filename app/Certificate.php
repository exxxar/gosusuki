<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    //

    protected $fillable = [
        "uuid",
        "full_name",
        "passport",
        "birthday",
        "snils",
        "oms",
        "international_passport",
        "sex",
        "unrz_number",
        "drug_name",
        "drug_creator",
        "drug_serial",
        "cert_number",
        "medical_organization",
        "drug_creation_date",
        "disease_information"
    ];

    protected $appends = ['prepared_full_name','prepared_passport'];

    public function getPreparedFullNameAttribute(){
        $tmp = explode(' ', $this->full_name);

        $first_name = $tmp[0]??'Тест';
        $second_name = $tmp[1]??'Тест';
        $last_name = $tmp[2]??'Тест';

        for($i = 1;$i<mb_strlen($first_name);$i++)
            $first_name[$i] = "*";

        for($i = 1;$i<mb_strlen($second_name);$i++)
            $second_name[$i] = "*";

        for($i = 1;$i<mb_strlen($last_name);$i++)
            $last_name[$i] = "*";

        return $first_name." ".$second_name." ".$last_name;
    }

    public function getPreparedPassportAttribute(){
        $tmp = explode(' ', $this->passport);

        $first = $tmp[0]??'';
        $second = $tmp[1]??'';

        for($i = 2;$i<mb_strlen($first);$i++)
            $first[$i] = "*";

        for($i = 0;$i<mb_strlen($second)-2;$i++)
            $second[$i] = "*";


        return $first." ".$second;
    }
}
