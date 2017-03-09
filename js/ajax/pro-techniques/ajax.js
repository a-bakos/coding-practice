// The complete Ajax package

// A generic function for performing Ajax requests
// It takes one argument, which is an object that contains a set of options

function ajax(options) {

  // Load the options object with defaults, if no values were provided by the user
  options = {
    // The type of HTTP request
    type: options.type || "POST",

    // The url the request will be made to
    url: options.url || "",

    // How long to wait before considering the request to be a timeout
    timeout: options.timeout || 5000,

    // Functions to call when the request fails, succeeds, or completes (either fail or succeed)
    onComplete: options.onComplete  || function(){},
    onError:    options.onError     || function(){},
    onSuccess:  options.onSuccess   || function(){},

    // The data type that will be returned from the server
    // the default is simply to determine what data was returned and act accordingly
    data: options.data || ""
  };

  // Create the request object
  var xml = new XMLHttpRequest();

  // Open the asynchronous request
  xml.open(options.type, options.url, true);

  // We're going to wait for a request for 5 seconds, before giving up
  var timeoutLength = options.timeout;

  // Keep track of when the request has been successfully completed
  var requestDone = false;

  // Initialize a callback which will fire 5 seconds from now, cancelling the
  // request - if it has not occured
  setTimeout(function() {
    requestDone = true;
  }, timeoutLength);

  // Watch for when the state of the document gets updated
  xml.onreadystatechange = function() {
    // Wait until the data is fully loaded,
    // and make sure that the request hasn't already timed out
    if (xml.readyState == 4 && !requestDone) {

      // Check to see if the request was successful
      if (httpSuccess(xml)) {

        // Execute the success callback with the data returned from the server
        options.onSuccess(httpData(xml, options.type));
      }
      // otherwise an error occured, so execute the error callback
      else {
        options.onError();
      }

      // Call the completion callback
      options.onComplete();

      // clean upafter ourselves, to avoid memory leaks
      xml = null;
    }
  };

  // establish the connection to the server
  xml.send();

  // determine the success of the HTTP response
  function httpSuccess(r) {
    try {
      // If no server status is provided and we're actually requesting a local
      // file, then it was successful
      return !r.status && location.protocol == "file:" ||

        // Any status in the 200 range is good
        (r.status >= 200 && r.status < 300) ||

        // Successful if the document has not been modified
        r.status == 304 ||

        // Safari returns an empty status if the file has not been modofied
        navigator.userAgent.indexOf("Safari") >= 0 && typeof r.status == "undefined";
    }
    catch(e) {}

    // if checking the status failed , then assume that the request failed too
    return false;
  }

  // Extract the correct data from the HTTP response
  function httpData(r,type) {
    // get the conten-type header
    var ct = r.getResponseHeader("content-type");

    // if no default type was provided determine if some form of xml was returned
    // from the server
    var data = !type && ct && ct.indexOf("xml") >= 0;

    // Get the xml document object if xml was returned from the server,
    // otherwise return the text contents returned by the server
    data = type == "xml" || data ? r.responseXML : r.responseText;

    // If the specified type is "script", execute the returned text response
    // as if it was JS
    if (type == "script") {
      eval.call(window, data);
    }

    // Return the response data (either an xml document or a text string)
    return data;
  }
}