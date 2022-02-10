<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CertificateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            "uuid" => $this->uuid,
            "full_name" => $this->full_name,
            "passport" => $this->passport,
            "snils" => $this->snils,
            "oms" => $this->oms,
            "international_passport" => $this->international_passport,
            "sex" => $this->sex,
            "unrz_number" => $this->unrz_number,
            "drug_name" => $this->drug_name,
            "drug_creator" => $this->drug_creator,
            "drug_serial" => $this->drug_serial,
            "medical_organization" => $this->medical_organization,
            "drug_creation_date" => $this->drug_creation_date,
            "disease_information" => $this->disease_information,
        ];
    }
}
