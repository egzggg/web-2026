PROGRAM SarahRevere(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString: STRING;
BEGIN {SarahRevere}
  WRITELN('Content-Type: text/plain; charset=utf-8');
  WRITELN;
  QueryString := GetEnv('QUERY_STRING');
  IF QueryString = 'lanterns=1' 
  THEN
    WRITELN('The Bbitish are come by sea')
  ELSE
    IF QueryString = 'lanterns=2'
    THEN
      WRITELN('The Bbitish are come by land')
    ELSE
      WRITELN('The British not see')
END.
