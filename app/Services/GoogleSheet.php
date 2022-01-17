<?php

namespace App\Services;

class GoogleSheet{
    private $spreadSheetId;
    private $client;
    private $googleSheetService;

    public function __construct(){
        $this->spreadSheetId = config(key: "spreadsheet.google_sheet_id");

        $this->client = new Google_Client();
        $this->client->setAuthConfig(storage_path(path: 'credentials.json'));
        $this->client->addScope(scope_or_scopes: "https://www.googleapis.com/auth/spreadsheets");

        $this->googleSheetService = new Google_Service_Sheets($this->client);
    }
}