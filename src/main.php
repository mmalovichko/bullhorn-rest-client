<?php

use jonathanraftery\Bullhorn\Rest\Auth\CredentialsProvider\MemoryCredentialsProvider;
use jonathanraftery\Bullhorn\Rest\Client as BullhornClient;
use jonathanraftery\Bullhorn\Rest\ClientOptions;

$client = new BullhornClient([
    // NOTE: MemoryCredentialProvider not recommended for production
    ClientOptions::CredentialsProvider => new MemoryCredentialsProvider(
        '', '', '', ''
    ),
]);

$client->refreshOrInitiateSession();
