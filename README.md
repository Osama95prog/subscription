simple subscription platform(only RESTful APIs with MySQL) in which users can subscribe to a website (there can be multiple websites in the system). Whenever a new post is published on a particular website, all it's subscribers shall receive an email with the post title and description in it. (no authentication of any kind is required)

to create website: http://localhost:8000/api/create/website
name = 

to create post: http://localhost:8000/api/create/post
title= post title is unique
body = title info
website_id = 1

to subscribe: 
http://localhost:8000/api/create/subscription
email=osama@test.com
website_id=1
name=sub1
