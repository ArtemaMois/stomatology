<?php


namespace App\Services;
use App\Models\Record;
use Carbon\Carbon;

class RecordService
{
    public function createRecord(array $data)
    {
        $validatedData = $this->getValidatedData($data);
        $record = Record::query()->create($validatedData);
        return $record;
    }

    private function getValidatedData(array $data)
    {
        $data['date'] = Carbon::make($data['date'])->format("Y-m-d H:i:s");
        return $data;
    }
}
