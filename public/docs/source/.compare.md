---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#Articles
<!-- START_0024aa209a84866d387e35cc1802ea70 -->
## Display a listing of articles.

> Example request:

```bash
curl -X GET "http://localhost:8000/api/v1/articles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/articles",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 92,
            "title": "et ut aut laboriosam",
            "slug": "2017-09-25-et-ut-aut-laboriosam",
            "content": "Alice gently remarked; 'they'd have been was not a mile high,' said Alice. 'Why, there they lay sprawling about, reminding her very much to-night, I should understand that better,' Alice said nothing; she had not gone (We know it to make out who was beginning to think this a very curious to see.",
            "published": false,
            "dates": {
                "created_at": "2017-09-25 23:22:37",
                "created_diff": "10 seconds ago",
                "updated_at": "2017-09-25 23:22:37",
                "updated_diff": "10 seconds ago"
            },
            "links": {
                "web_link": "http:\/\/localhost:8000\/articles\/2017-09-25-et-ut-aut-laboriosam",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/articles\/92"
            },
            "author": {
                "id": 8,
                "name": "Verner Mitchell",
                "web_link": "http:\/\/localhost:8000\/users\/8",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/users\/8"
            }
        },
        {
            "id": 93,
            "title": "rerum magnam dignissimos mollitia",
            "slug": "2017-09-25-rerum-magnam-dignissimos-mollitia",
            "content": "Dinn may be,' said the Caterpillar. 'Well, I've tried hedges,' the Pigeon went on, 'if you don't know what \"it\" means well enough, when I grow at a reasonable pace,' said the Caterpillar. 'Well, perhaps not,' said Alice sharply, for she could not taste theirs, and the game began. Alice gave a.",
            "published": true,
            "dates": {
                "published_at": "2017-09-24 03:32:13",
                "published_diff": "1 day ago",
                "created_at": "2017-09-25 23:22:37",
                "created_diff": "10 seconds ago",
                "updated_at": "2017-09-25 23:22:37",
                "updated_diff": "10 seconds ago"
            },
            "links": {
                "web_link": "http:\/\/localhost:8000\/articles\/2017-09-25-rerum-magnam-dignissimos-mollitia",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/articles\/93"
            },
            "author": {
                "id": 7,
                "name": "Fausto Purdy",
                "web_link": "http:\/\/localhost:8000\/users\/7",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/users\/7"
            },
            "publisher": {
                "id": 7,
                "name": "Fausto Purdy",
                "web_link": "http:\/\/localhost:8000\/users\/7",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/users\/7"
            }
        },
        {
            "id": 91,
            "title": "soluta eos qui eligendi",
            "slug": "2017-09-25-soluta-eos-qui-eligendi",
            "content": "Now, if you drink much from a bottle marked 'poison,' so Alice ventured to taste it, and very neatly and simply arranged; the only difficulty was, that if something wasn't done about it just now.' 'It's the stupidest tea-party I ever was at the bottom of the Gryphon, 'she wants for to know what.",
            "published": false,
            "dates": {
                "created_at": "2017-09-25 23:22:37",
                "created_diff": "10 seconds ago",
                "updated_at": "2017-09-25 23:22:37",
                "updated_diff": "10 seconds ago"
            },
            "links": {
                "web_link": "http:\/\/localhost:8000\/articles\/2017-09-25-soluta-eos-qui-eligendi",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/articles\/91"
            },
            "author": {
                "id": 6,
                "name": "Shanie Schiller",
                "web_link": "http:\/\/localhost:8000\/users\/6",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/users\/6"
            }
        },
        {
            "id": 95,
            "title": "illum deleniti in voluptatem",
            "slug": "2017-09-25-illum-deleniti-in-voluptatem",
            "content": "While she was exactly three inches high). 'But I'm not looking for it, you know.' He was an old conger-eel, that used to do:-- 'How doth the little door was shut again, and all her coaxing. Hardly knowing what she was small enough to try the thing yourself, some winter day, I will tell you his.",
            "published": true,
            "dates": {
                "published_at": "2017-08-30 19:40:06",
                "published_diff": "3 weeks ago",
                "created_at": "2017-09-25 23:22:37",
                "created_diff": "10 seconds ago",
                "updated_at": "2017-09-25 23:22:37",
                "updated_diff": "10 seconds ago"
            },
            "links": {
                "web_link": "http:\/\/localhost:8000\/articles\/2017-09-25-illum-deleniti-in-voluptatem",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/articles\/95"
            },
            "author": {
                "id": 7,
                "name": "Fausto Purdy",
                "web_link": "http:\/\/localhost:8000\/users\/7",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/users\/7"
            },
            "publisher": {
                "id": 7,
                "name": "Fausto Purdy",
                "web_link": "http:\/\/localhost:8000\/users\/7",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/users\/7"
            }
        },
        {
            "id": 94,
            "title": "commodi fuga et voluptas",
            "slug": "2017-09-25-commodi-fuga-et-voluptas",
            "content": "Alice's first thought was that it had gone. 'Well! I've often seen a good opportunity for showing off her head!' the Queen said to herself, 'whenever I eat or drink something or other; but the cook took the watch and looked into its nest. Alice crouched down among the bright flower-beds and the.",
            "published": true,
            "dates": {
                "published_at": "2017-09-19 01:36:26",
                "published_diff": "6 days ago",
                "created_at": "2017-09-25 23:22:37",
                "created_diff": "10 seconds ago",
                "updated_at": "2017-09-25 23:22:37",
                "updated_diff": "10 seconds ago"
            },
            "links": {
                "web_link": "http:\/\/localhost:8000\/articles\/2017-09-25-commodi-fuga-et-voluptas",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/articles\/94"
            },
            "author": {
                "id": 4,
                "name": "Verlie Braun",
                "web_link": "http:\/\/localhost:8000\/users\/4",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/users\/4"
            },
            "publisher": {
                "id": 4,
                "name": "Verlie Braun",
                "web_link": "http:\/\/localhost:8000\/users\/4",
                "api_link": "http:\/\/localhost:8000\/api\/v1\/users\/4"
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhostapi\/v1\/articles?page=1",
        "last": "http:\/\/localhostapi\/v1\/articles?page=20",
        "prev": null,
        "next": "http:\/\/localhostapi\/v1\/articles?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 20,
        "path": "http:\/\/localhostapi\/v1\/articles",
        "per_page": 5,
        "to": 5,
        "total": 100
    }
}
```

### HTTP Request
`GET api/v1/articles`

`HEAD api/v1/articles`


<!-- END_0024aa209a84866d387e35cc1802ea70 -->

<!-- START_4b364e710114c838981361222d359b56 -->
## Store a new article.

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/articles" \
-H "Accept: application/json" \
    -d "title"="36" \
    -d "published"="1" \
    -d "published_at"="1982-09-04" \
    -d "published_by"="-80" \
    -d "author_id"="-80" \
    -d "content"="ut" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/articles",
    "method": "POST",
    "data": {
        "title": 36,
        "published": true,
        "published_at": "1982-09-04",
        "published_by": -80,
        "author_id": -80,
        "content": "ut"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/articles`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | Between: `6` and `120`
    published | boolean |  required  | 
    published_at | date |  required  | 
    published_by | integer |  required  | Valid user id
    author_id | integer |  required  | Valid user id
    content | string |  required  | Minimum: `1`

<!-- END_4b364e710114c838981361222d359b56 -->

<!-- START_1d791cc0f7100b40897cafe346efccfa -->
## Display a specified article.

> Example request:

```bash
curl -X GET "http://localhost:8000/api/v1/articles/{article}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/articles/{article}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": {
        "id": 1,
        "title": "porro aut eaque facere",
        "slug": "2017-09-25-porro-aut-eaque-facere",
        "content": "I must sugar my hair.\" As a duck with its wings. 'Serpent!' screamed the Queen. 'Never!' said the Gryphon, sighing in his confusion he bit a large rabbit-hole under the sea,' the Gryphon never learnt it.' 'Hadn't time,' said the March Hare had just succeeded in getting its body tucked away.",
        "published": true,
        "dates": {
            "published_at": "2017-09-19 19:44:21",
            "published_diff": "6 days ago",
            "created_at": "2017-09-25 23:22:34",
            "created_diff": "14 seconds ago",
            "updated_at": "2017-09-25 23:22:34",
            "updated_diff": "14 seconds ago"
        },
        "links": {
            "web_link": "http:\/\/localhost:8000\/articles\/2017-09-25-porro-aut-eaque-facere",
            "api_link": "http:\/\/localhost:8000\/api\/v1\/articles\/1"
        },
        "author": {
            "id": 3,
            "name": "Mireille Koch",
            "web_link": "http:\/\/localhost:8000\/users\/3",
            "api_link": "http:\/\/localhost:8000\/api\/v1\/users\/3"
        },
        "publisher": {
            "id": 3,
            "name": "Mireille Koch",
            "web_link": "http:\/\/localhost:8000\/users\/3",
            "api_link": "http:\/\/localhost:8000\/api\/v1\/users\/3"
        }
    }
}
```

### HTTP Request
`GET api/v1/articles/{article}`

`HEAD api/v1/articles/{article}`


<!-- END_1d791cc0f7100b40897cafe346efccfa -->

<!-- START_477be22c63eb6965c73f74d31a6dd54b -->
## Update a specified article.

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/articles/{article}" \
-H "Accept: application/json" \
    -d "title"="8" \
    -d "published"="1" \
    -d "published_at"="1970-11-28" \
    -d "published_by"="3" \
    -d "author_id"="3" \
    -d "content"="sit" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/articles/{article}",
    "method": "PUT",
    "data": {
        "title": 8,
        "published": true,
        "published_at": "1970-11-28",
        "published_by": 3,
        "author_id": 3,
        "content": "sit"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/articles/{article}`

`PATCH api/v1/articles/{article}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | Between: `6` and `120`
    published | boolean |  required  | 
    published_at | date |  required  | 
    published_by | integer |  required  | Valid user id
    author_id | integer |  required  | Valid user id
    content | string |  required  | Minimum: `1`

<!-- END_477be22c63eb6965c73f74d31a6dd54b -->

<!-- START_302bb1e0518e395c1277867aeed091fe -->
## Remove a specified article.

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/articles/{article}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/articles/{article}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/articles/{article}`


<!-- END_302bb1e0518e395c1277867aeed091fe -->

#Men
<!-- START_3dd6a29272fd09c2f8e2a04dbb80eeef -->
## Display a listing of men.

> Example request:

```bash
curl -X GET "http://localhost:8000/api/v1/men" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/men",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 50,
            "first_name": "Hollis",
            "last_name": "Reichert",
            "height": 175,
            "waist": 79,
            "shoe_size": 46,
            "hair": "roux",
            "sex": "M",
            "created_at": "2017-09-25 23:22:32",
            "created_diff": "11 seconds ago",
            "links": {
                "web_link": "http:\/\/localhost:8000\/males\/hollis-reichert",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/50"
            },
            "creator": {
                "id": 15,
                "display_name": "Mohammad Boehm",
                "web_link": "http:\/\/localhost:8000\/males\/50",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/50"
            }
        },
        {
            "id": 48,
            "first_name": "Marty",
            "last_name": "Cruickshank",
            "height": 177,
            "waist": 76,
            "shoe_size": 42,
            "hair": "roux",
            "sex": "M",
            "created_at": "2017-09-25 23:22:32",
            "created_diff": "11 seconds ago",
            "links": {
                "web_link": "http:\/\/localhost:8000\/males\/marty-cruickshank",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/48"
            },
            "creator": {
                "id": 12,
                "display_name": "Charity Schmeler",
                "web_link": "http:\/\/localhost:8000\/males\/48",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/48"
            }
        },
        {
            "id": 46,
            "first_name": "Helmer",
            "last_name": "Ruecker",
            "height": 184,
            "waist": 91,
            "shoe_size": 43,
            "hair": "roux",
            "sex": "M",
            "created_at": "2017-09-25 23:22:32",
            "created_diff": "11 seconds ago",
            "links": {
                "web_link": "http:\/\/localhost:8000\/males\/helmer-ruecker",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/46"
            },
            "creator": {
                "id": 13,
                "display_name": "Stephan Cassin",
                "web_link": "http:\/\/localhost:8000\/males\/46",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/46"
            }
        },
        {
            "id": 44,
            "first_name": "Chadd",
            "last_name": "Abbott",
            "height": 175,
            "waist": 91,
            "shoe_size": 44,
            "hair": "roux",
            "sex": "M",
            "created_at": "2017-09-25 23:22:32",
            "created_diff": "11 seconds ago",
            "links": {
                "web_link": "http:\/\/localhost:8000\/males\/chadd-abbott",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/44"
            },
            "creator": {
                "id": 15,
                "display_name": "Mohammad Boehm",
                "web_link": "http:\/\/localhost:8000\/males\/44",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/44"
            }
        },
        {
            "id": 42,
            "first_name": "Jackson",
            "last_name": "Connelly",
            "height": 183,
            "waist": 93,
            "shoe_size": 47,
            "hair": "blond",
            "sex": "M",
            "created_at": "2017-09-25 23:22:32",
            "created_diff": "11 seconds ago",
            "links": {
                "web_link": "http:\/\/localhost:8000\/males\/jackson-connelly",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/42"
            },
            "creator": {
                "id": 13,
                "display_name": "Stephan Cassin",
                "web_link": "http:\/\/localhost:8000\/males\/42",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/42"
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhostapi\/v1\/men?page=1",
        "last": "http:\/\/localhostapi\/v1\/men?page=5",
        "prev": null,
        "next": "http:\/\/localhostapi\/v1\/men?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 5,
        "path": "http:\/\/localhostapi\/v1\/men",
        "per_page": 5,
        "to": 5,
        "total": 25
    }
}
```

### HTTP Request
`GET api/v1/men`

`HEAD api/v1/men`


<!-- END_3dd6a29272fd09c2f8e2a04dbb80eeef -->

<!-- START_05ea9e668701939e6700ef2b3baca98d -->
## Store a new man.

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/men" \
-H "Accept: application/json" \
    -d "first_name"="-19" \
    -d "last_name"="-19" \
    -d "height"="176" \
    -d "waist"="-609701079" \
    -d "shoe_size"="40" \
    -d "hair"="rouge" \
    -d "sex"="H" \
    -d "created_by"="0" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/men",
    "method": "POST",
    "data": {
        "first_name": -19,
        "last_name": -19,
        "height": 176,
        "waist": -609701079,
        "shoe_size": 40,
        "hair": "rouge",
        "sex": "H",
        "created_by": 0
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/men`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_name | string |  required  | Between: `3` and `80`
    last_name | string |  required  | Between: `3` and `80`
    height | integer |  required  | Between: `180` and `195`
    waist | integer |  required  | Minimum: `75`
    shoe_size | integer |  required  | Between: `42` and `50`
    hair | string |  required  | `rouge`, `blond`, `brun`, `noir`, `roux`, `châtain` or `blanc`
    sex | string |  required  | `H`
    created_by | integer |  optional  | Valid user id

<!-- END_05ea9e668701939e6700ef2b3baca98d -->

<!-- START_a8a2fcd43964a42125e8bb7e7ee878e6 -->
## Display a specified man.

> Example request:

```bash
curl -X GET "http://localhost:8000/api/v1/men/{man}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/men/{man}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": {
        "id": 2,
        "first_name": "Ahmad",
        "last_name": "Ebert",
        "height": 181,
        "waist": 85,
        "shoe_size": 47,
        "hair": "blanc",
        "sex": "M",
        "created_at": "2017-09-25 23:22:31",
        "created_diff": "13 seconds ago",
        "links": {
            "web_link": "http:\/\/localhost:8000\/males\/ahmad-ebert",
            "api_link": "http:\/\/localhost:8000\/api\/\/males\/2"
        },
        "creator": {
            "id": 16,
            "display_name": "Jose Bergnaum",
            "web_link": "http:\/\/localhost:8000\/males\/2",
            "api_link": "http:\/\/localhost:8000\/api\/\/males\/2"
        }
    }
}
```

### HTTP Request
`GET api/v1/men/{man}`

`HEAD api/v1/men/{man}`


<!-- END_a8a2fcd43964a42125e8bb7e7ee878e6 -->

<!-- START_67f71c14ec9310f2abff1956afd65a54 -->
## Update a specified man.

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/men/{man}" \
-H "Accept: application/json" \
    -d "first_name"="-9" \
    -d "last_name"="-9" \
    -d "height"="178" \
    -d "waist"="-354673827" \
    -d "shoe_size"="41" \
    -d "hair"="rouge" \
    -d "sex"="H" \
    -d "created_by"="0" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/men/{man}",
    "method": "PUT",
    "data": {
        "first_name": -9,
        "last_name": -9,
        "height": 178,
        "waist": -354673827,
        "shoe_size": 41,
        "hair": "rouge",
        "sex": "H",
        "created_by": 0
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/men/{man}`

`PATCH api/v1/men/{man}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_name | string |  required  | Between: `3` and `80`
    last_name | string |  required  | Between: `3` and `80`
    height | integer |  required  | Between: `180` and `195`
    waist | integer |  required  | Minimum: `75`
    shoe_size | integer |  required  | Between: `42` and `50`
    hair | string |  required  | `rouge`, `blond`, `brun`, `noir`, `roux`, `châtain` or `blanc`
    sex | string |  required  | `H`
    created_by | integer |  optional  | Valid user id

<!-- END_67f71c14ec9310f2abff1956afd65a54 -->

<!-- START_68651f7ac70df5399b5781abafe3ca9b -->
## Remove a specified man.

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/men/{man}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/men/{man}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/men/{man}`


<!-- END_68651f7ac70df5399b5781abafe3ca9b -->

#Women
<!-- START_b30b9a76c14cddb0822d18cc1dbd2b9b -->
## Display a listing of womens.

> Example request:

```bash
curl -X GET "http://localhost:8000/api/v1/women" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/women",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 49,
            "first_name": "Allie",
            "last_name": "Gislason",
            "height": 173,
            "waist": 59,
            "chest": 78,
            "cap_size": "B",
            "hips": 100,
            "shoe_size": 34,
            "hair": "noir",
            "sex": "F",
            "dates": {
                "created_at": "2017-09-25 23:22:32",
                "created_diff": "13 seconds ago",
                "updated_at": "2017-09-25 23:22:32",
                "updated_diff": "13 seconds ago"
            },
            "links": {
                "web_link": "http:\/\/localhost:8000\/males\/allie-gislason",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/49"
            },
            "creator": {
                "id": 16,
                "display_name": "Jose Bergnaum",
                "web_link": "http:\/\/localhost:8000\/males\/49",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/49"
            }
        },
        {
            "id": 47,
            "first_name": "Bernadette",
            "last_name": "Heidenreich",
            "height": 172,
            "waist": 69,
            "chest": 80,
            "cap_size": "B",
            "hips": 85,
            "shoe_size": 34,
            "hair": "blanc",
            "sex": "F",
            "dates": {
                "created_at": "2017-09-25 23:22:32",
                "created_diff": "13 seconds ago",
                "updated_at": "2017-09-25 23:22:32",
                "updated_diff": "13 seconds ago"
            },
            "links": {
                "web_link": "http:\/\/localhost:8000\/males\/bernadette-heidenreich",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/47"
            },
            "creator": {
                "id": 15,
                "display_name": "Mohammad Boehm",
                "web_link": "http:\/\/localhost:8000\/males\/47",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/47"
            }
        },
        {
            "id": 45,
            "first_name": "Ashlynn",
            "last_name": "Muller",
            "height": 183,
            "waist": 58,
            "chest": 78,
            "cap_size": "B",
            "hips": 86,
            "shoe_size": 36,
            "hair": "brun",
            "sex": "F",
            "dates": {
                "created_at": "2017-09-25 23:22:32",
                "created_diff": "13 seconds ago",
                "updated_at": "2017-09-25 23:22:32",
                "updated_diff": "13 seconds ago"
            },
            "links": {
                "web_link": "http:\/\/localhost:8000\/males\/ashlynn-muller",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/45"
            },
            "creator": {
                "id": 14,
                "display_name": "Jairo Hand",
                "web_link": "http:\/\/localhost:8000\/males\/45",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/45"
            }
        },
        {
            "id": 43,
            "first_name": "Rachelle",
            "last_name": "Blick",
            "height": 180,
            "waist": 50,
            "chest": 91,
            "cap_size": "E",
            "hips": 96,
            "shoe_size": 37,
            "hair": "blanc",
            "sex": "F",
            "dates": {
                "created_at": "2017-09-25 23:22:32",
                "created_diff": "13 seconds ago",
                "updated_at": "2017-09-25 23:22:32",
                "updated_diff": "13 seconds ago"
            },
            "links": {
                "web_link": "http:\/\/localhost:8000\/males\/rachelle-blick",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/43"
            },
            "creator": {
                "id": 16,
                "display_name": "Jose Bergnaum",
                "web_link": "http:\/\/localhost:8000\/males\/43",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/43"
            }
        },
        {
            "id": 41,
            "first_name": "Dasia",
            "last_name": "Spencer",
            "height": 178,
            "waist": 54,
            "chest": 90,
            "cap_size": "E",
            "hips": 75,
            "shoe_size": 34,
            "hair": "blanc",
            "sex": "F",
            "dates": {
                "created_at": "2017-09-25 23:22:32",
                "created_diff": "13 seconds ago",
                "updated_at": "2017-09-25 23:22:32",
                "updated_diff": "13 seconds ago"
            },
            "links": {
                "web_link": "http:\/\/localhost:8000\/males\/dasia-spencer",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/41"
            },
            "creator": {
                "id": 12,
                "display_name": "Charity Schmeler",
                "web_link": "http:\/\/localhost:8000\/males\/41",
                "api_link": "http:\/\/localhost:8000\/api\/\/males\/41"
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhostapi\/v1\/women?page=1",
        "last": "http:\/\/localhostapi\/v1\/women?page=5",
        "prev": null,
        "next": "http:\/\/localhostapi\/v1\/women?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 5,
        "path": "http:\/\/localhostapi\/v1\/women",
        "per_page": 5,
        "to": 5,
        "total": 25
    }
}
```

### HTTP Request
`GET api/v1/women`

`HEAD api/v1/women`


<!-- END_b30b9a76c14cddb0822d18cc1dbd2b9b -->

<!-- START_f00316bc11e65c74742b46bc2a9c59ab -->
## Store a new women.

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/women" \
-H "Accept: application/json" \
    -d "first_name"="37" \
    -d "last_name"="37" \
    -d "height"="177" \
    -d "waist"="59" \
    -d "chest"="84" \
    -d "cap_size"="C" \
    -d "hips"="86" \
    -d "shoe_size"="37" \
    -d "hair"="noir" \
    -d "sex"="F" \
    -d "created_by"="20412" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/women",
    "method": "POST",
    "data": {
        "first_name": 37,
        "last_name": 37,
        "height": 177,
        "waist": 59,
        "chest": 84,
        "cap_size": "C",
        "hips": 86,
        "shoe_size": 37,
        "hair": "noir",
        "sex": "F",
        "created_by": 20412
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/women`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_name | string |  required  | Between: `3` and `80`
    last_name | string |  required  | Between: `3` and `80`
    height | integer |  required  | Between: `170` and `185`
    waist | integer |  required  | Between: `50` and `70`
    chest | integer |  required  | Between: `75` and `95`
    cap_size | string |  required  | `A`, `B`, `C`, `D` or `E`
    hips | integer |  required  | Between: `75` and `100`
    shoe_size | integer |  required  | Between: `34` and `40`
    hair | string |  required  | `rouge`, `blond`, `brun`, `noir`, `roux`, `châtain` or `blanc`
    sex | string |  required  | `F`
    created_by | integer |  required  | Valid user id

<!-- END_f00316bc11e65c74742b46bc2a9c59ab -->

<!-- START_47e10ef2564efbd4d21173c36a13d65a -->
## Display a specified women.

> Example request:

```bash
curl -X GET "http://localhost:8000/api/v1/women/{woman}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/women/{woman}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": {
        "id": 1,
        "first_name": "Eloisa",
        "last_name": "Nienow",
        "height": 177,
        "waist": 66,
        "chest": 86,
        "cap_size": "A",
        "hips": 79,
        "shoe_size": 40,
        "hair": "noir",
        "sex": "F",
        "dates": {
            "created_at": "2017-09-25 23:22:31",
            "created_diff": "15 seconds ago",
            "updated_at": "2017-09-25 23:22:31",
            "updated_diff": "15 seconds ago"
        },
        "links": {
            "web_link": "http:\/\/localhost:8000\/males\/eloisa-nienow",
            "api_link": "http:\/\/localhost:8000\/api\/\/males\/1"
        },
        "creator": {
            "id": 13,
            "display_name": "Stephan Cassin",
            "web_link": "http:\/\/localhost:8000\/males\/1",
            "api_link": "http:\/\/localhost:8000\/api\/\/males\/1"
        }
    }
}
```

### HTTP Request
`GET api/v1/women/{woman}`

`HEAD api/v1/women/{woman}`


<!-- END_47e10ef2564efbd4d21173c36a13d65a -->

<!-- START_4a93c1766c68eaba524d491917b30b48 -->
## Update a specified women.

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/women/{woman}" \
-H "Accept: application/json" \
    -d "first_name"="-35" \
    -d "last_name"="-35" \
    -d "height"="163" \
    -d "waist"="40" \
    -d "chest"="65" \
    -d "cap_size"="A" \
    -d "hips"="63" \
    -d "shoe_size"="31" \
    -d "hair"="rouge" \
    -d "sex"="F" \
    -d "created_by"="0" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/women/{woman}",
    "method": "PUT",
    "data": {
        "first_name": -35,
        "last_name": -35,
        "height": 163,
        "waist": 40,
        "chest": 65,
        "cap_size": "A",
        "hips": 63,
        "shoe_size": 31,
        "hair": "rouge",
        "sex": "F",
        "created_by": 0
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/women/{woman}`

`PATCH api/v1/women/{woman}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_name | string |  required  | Between: `3` and `80`
    last_name | string |  required  | Between: `3` and `80`
    height | integer |  required  | Between: `170` and `185`
    waist | integer |  required  | Between: `50` and `70`
    chest | integer |  required  | Between: `75` and `95`
    cap_size | string |  required  | `A`, `B`, `C`, `D` or `E`
    hips | integer |  required  | Between: `75` and `100`
    shoe_size | integer |  required  | Between: `34` and `40`
    hair | string |  required  | `rouge`, `blond`, `brun`, `noir`, `roux`, `châtain` or `blanc`
    sex | string |  required  | `F`
    created_by | integer |  required  | Valid user id

<!-- END_4a93c1766c68eaba524d491917b30b48 -->

<!-- START_834e2e35826de0f3cce6200897011abe -->
## Remove a specified women.

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/women/{woman}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000/api/v1/women/{woman}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/women/{woman}`


<!-- END_834e2e35826de0f3cce6200897011abe -->

