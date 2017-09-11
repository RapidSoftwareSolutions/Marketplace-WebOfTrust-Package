[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/WebOfTrust/functions?utm_source=RapidAPIGitHub_WebOfTrustFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# WebOfTrust Package
MyWOT/WOT (Web of Trust) is a browser add-on and web site. WOT is an online reputation and Internet safety service, providing crowdsourced reviews and other data about whether websites respect user privacy, are secure, and other indicators of trust.
* Domain: [www.mywot.com](https://www.mywot.com/)
* Credentials: apiKey

## How to get credentials: 
1. In order to request a key, you need a WOT account.
2. Once you have an account, you can request your API key from this [page](https:\/\/www.mywot.com\/en\/signup?destination=profile\/api).
3. After you have requested a key, you will see an API tab in your profile where you can update the information and access the key.
 
 ## Custom datatypes:
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]```
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
## WebOfTrust.getReputationsForHosts
Is used for requesting reputations for multiple targets.More information [here](https://www.mywot.com/wiki/API).

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key.
| hosts | List       | A list of target names separated with a forward slash (“/”). For example, www.example.com/another.example.net/onemore.example.org/. The value must end with a slash and must include at most 100 target names. Note: the full request path must also be less than 8 KiB or it will be rejected.

