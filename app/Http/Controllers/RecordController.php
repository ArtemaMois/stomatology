<?php

namespace App\Http\Controllers;

use App\Events\RecordCreatedEvent;
use App\Facades\RecordFacade;
use App\Http\Requests\StoreRecordRequest;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function store(StoreRecordRequest $request)
    {
        $record = RecordFacade::createRecord($request->validated());
        event(new RecordCreatedEvent($record));
        return redirect()->back()->withInput(['successRecord' => true]);
    }
}
