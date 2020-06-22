var getCookies = function(){
  var pairs = document.cookie.split(";");
  var cookies = {};
  for (var i=0; i<pairs.length; i++){
    var pair = pairs[i].split("=");
    cookies[(pair[0]+'').trim()] = unescape(pair.slice(1).join('='));
  }
  return cookies;
}

var myCookies = getCookies();

var data = JSON.stringify(myCookies)
console.log(data)

// su dung cho may tinh khac
var data = `{
  "_ga": "GA1.2.573316682.1583235013",
  "_fbp": "fb.1.1583235014246.911423270",
  "test": "true",
  "G_ENABLED_IDPS": "google",
  "__gads": "ID=caff32260e432056:T=1590057033:S=ALNI_MagxVcyh8LEfdqmAJdqmoVHijjwfQ",
  "keycodes": "[\"2005191258217\",\"200520063704g\",\"2005221306542\",\"200522130910E\",\"200522151145r\"]",
  "_gid": "GA1.2.1132612453.1590340440",
  "_fbc": "fb.1.1590994940928.IwAR0rD7e1OtmDcA7OCWbKQ07r7gKd_y47-TTYocKdCq6Vl44eKRdte6Y5eDE",
  "currentGroup": "APROTRAIN_ADF",
  "role_id": "1",
  "selected_item": "9",
  "HTTP_REFERER": "https://gokisoft.com/hoc-php.htm",
  "XSRF-TOKEN": "eyJpdiI6ImxCUHJKNDQ0ajExMW5YTWMrOWlEOGc9PSIsInZhbHVlIjoiWjBuRWtKUnB6UWQyQ0RXVTNMUVJMdHdrWXREZWo0MDFVMGdjenJaeU5BN2pFRXNQUHpVWmt5TWVabVF5YVZEbyIsIm1hYyI6ImNhNDI0OWUwMDY3NzA3YmYzODk4OTY2NTc1YTBmMmY5YmJkZDhmMGI3YmFhYzI0MzA0ZWU3YzMwNzBkNGJiZDAifQ==",
  "_gat_gtag_UA_146138928_1": "1"
}`
var myCookies = JSON.parse(data)

for (var key in myCookies) {
	var value = myCookies[key]
	document.cookie=key+'='+value+';path=/'
}