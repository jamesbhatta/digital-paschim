# Yellow-Pages

  

### Notes

 - Images are stored in /public/uploads
 - /public/uploads is added to gitignore
 - due to some issue in ``cviebrock/eloquent-sluggable``,it is served from local repository 
 
 ```
"repositories": [

	{

		"type": "path",
	
		"url": "packages/cviebrock/eloquent-sluggable",

		"options": {

				"symlink": true

			}

		}

],
```

- mostly used file system is ``public_uploads``