PROGRAM PrintName(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString, ContentLength, UserAgent, HttpHost, RequestMethod: STRING;
BEGIN
  QueryString := GetEnv('QUERY_STRING');
  ContentLength := GetEnv('CONTENT_LENGTH');
  HttpHost := GetEnv('HTTP_HOST');
  UserAgent := GetEnv('HTTP_USER_AGENT');
  RequestMethod :=  GetEnv('REQUEST_METHOD');

  WRITELN('Content-Type: text/html; charset=utf-8');
  WRITELN;

  WRITELN('<p><strong>REQUEST_METHOD:</strong> ', RequestMethod, '</p>');
  WRITELN('<p><strong>QUERY_STRING:</strong> ', QueryString, '</p>');
  WRITELN('<p><strong>CONTENT_LENGTH:</strong> ', ContentLength, '</p>');
  WRITELN('<p><strong>HTTP_USER_AGENT:</strong> ', UserAgent, '</p>');
  WRITELN('<p><strong>HTTP_HOST:</strong> ', HttpHost, '</p>');
END.