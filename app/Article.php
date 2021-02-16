<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*
    Esercizio:
    Create un nuovo progetto Laravel, con relativo database,
    e create model e migration di un'entità Article 
    (l'articolo di un blog, potrà avere campi come title, subtitle, author, text, publication_date, ...) 
    e caricate degli articoli fake nel vostro database usando i seeder e Faker.
    Cominciate una CRUD: non è necessario completarla, 
    può anche bastare una index con una semplice tabella o un dd per visualizzare tutti i dati 
    inseriti con seeder/faker.
    */
    protected $fillable = [
        'title', 
        'subtitle', 
        'author',
        'text',
        'publication_date',
    ];
}
