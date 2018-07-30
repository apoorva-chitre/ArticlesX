Created by following a Tutorial by @bradtraversy on his youtube channel https://www.youtube.com/user/TechGuyWeb

ArticlesX API
Articles
DELETE Article Delete
http://articlesx.test/api/article/29
Delete an article from the articles collection as specified by the article id
HEADERS
Accept
application/json
Content-Type
application/json

BODY
{
	"title": "Perspiciatis veritatis officiis voluptates.",
    "body": "Quasi non ullam temporibus explicabo quia. Qui enim mollitia in non quasi eos quas. Facere dolores placeat aut sapiente vel nihil. Adipisci ipsam et blanditiis. Et laborum numquam magnam rerum."
}


Example Request

Article Delete

curl --request DELETE \
  --url http://articlesx.test/api/article/29 \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --data '{
	"title": "Perspiciatis veritatis officiis voluptates.",
    "body": "Quasi non ullam temporibus explicabo quia. Qui enim mollitia in non quasi eos quas. Facere dolores placeat aut sapiente vel nihil. Adipisci ipsam et blanditiis. Et laborum numquam magnam rerum."
}'

GET Articles All
articlesx.test/api/articles
Get a collection of all articles stored on the articlesX web application
HEADERS
Accept
application/json
Content-Type
application/json

Example Request
Articles All
curl --request GET \
  --url http://articlesx.test/api/articles \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json'

GET Article Show
articlesx.test/api/article/1
Get a single articles from the articles collection as specified by the article id
HEADERS
Accept
application/json
Content-Type
application/json


Example Request
Article Show
curl --request GET \
  --url http://articlesx.test/api/article/1 \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json'

POST Article Add
http://articlesx.test/api/article
Add a new article to the articles collection with the data provided in the request body
HEADERS
Accept
application/json
Content-Type
application/json

BODY

{
	"title" : "Test Title",
	"body" : "Test Body"
}


Example Request
Article Add
curl --request POST \
  --url http://articlesx.test/api/article \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --data '{
	"title" : "Test Title",
	"body" : "Test Body"
}'

PUT Article Update
http://articlesx.test/api/article
Update an article from the articles collection with the data provided in the request body as specified by the article_id in the body
HEADERS
Content-Type
application/json
Accept
application/json

BODY

{
	"article_id": 28,
	"title" : "Updated Title",
	"body" : "Updated Body"
}
