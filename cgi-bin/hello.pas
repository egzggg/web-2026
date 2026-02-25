PROGRAM PrintName(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString, Name: STRING;
  PosName: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain; charset=utf-8');
  WRITELN;
  QueryString := GetEnv('QUERY_STRING');
  PosName := Pos('name=', QueryString);
  IF PosName > 0
  THEN 
    Name := Copy(QueryString, PosName + 5, Length(QueryString) - PosName + 1) 
  ELSE 
    Name := 'Anonymous';
  WRITELN('Hello ', 'dear ', Name);  
END.

