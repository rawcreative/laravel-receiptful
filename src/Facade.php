<?php namespace RawCreative\Receiptful;

class Facade extends \Illuminate\Support\Facades\Facade {

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor() { return 'receiptful'; }

}
