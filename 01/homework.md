# Homework 1

Netscape plug-in belongs to "Distributed Object Platform". It defines a set of rules based on which browser extensions can be developed. A plugin implement and expose a pre-defined set of functions so any browser supporting this technology is able to invoke the plugin.

It belongs to "Distributed Object Platform" because it enables plugins and browsers to interplay regardless time, space, platform and awareness. As long as the plugin follows the API definition and the browser supports this API, they can work seamlessly together.

# Homework 2

Advantages of a stateless Web include:

* A session uses less resource on the server, so
* Server can handle more requests concurrently
* Server doesn't need to store history information of a client
* Simplier server implementation

Disadvantages include:

* Slight transmission overhead since extra information must be carried in each request if a stateful transaction is desired (e.g. to tell whether a client is logged in, browser needs to send include cookie in HTTP header).

In such a model, a web server cannot tell how many browers are reading its document, since the server closes connection as soon as the transmission is over.

