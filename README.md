# Website for Just Clean Window Cleaning
Live at [justcleanwindowcleaning.com](http://www.justcleanwindowcleaning.com)

Originally a single page website created for a small business in O'Fallon, IL. Quickly expanded into a multiple page website that uses PHP to insert headers and footers into the different pages.

##### SEO Optimization
I'm always looking out for more ways to make this website more visible on search engines.
This page uses PHP to receive GET requests to the page (generated on the page in the *Areas Serviced* section) so that a page with a custom title and text is generated based on the town and counties serviced.
(Originally I had this same feature running on an Express application, which had to be scrapped due to the servers that the client's website runs on. That code can still be found on an alternate branch [here](https://github.com/darzouras/JustClean/tree/NodeJS---Express).)
I've recently been learning more about Structured Data Markup, and is what I'm taking advantage of most recently. My SDM script is found at the top of the index.php page.
