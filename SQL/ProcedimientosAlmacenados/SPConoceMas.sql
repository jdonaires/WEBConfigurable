Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_ConoceMas(
in _IdConoceMas  int(11) ,
in _Descripcion varchar(45) ,
in _URL varchar(45) ,
in _Image varchar(45) ,
in _IdUsuario  int(11) ,



in _Opcion varchar(45) 

 )
BEGIN
 if _Opcion='I' then

insert into Conocemas (Descripcion,URL,Image,IdUsuario) values(_Descripcion,_URL,_Image,_IdUsuario);






   End IF;

    if _Opcion='D' then
Delete from Conocemas where IdConoceMas =_IdConoceMas ;



   
   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_ConoceMas(

     in _Opcion varchar(45)
 )
BEGIN
  
   
 if _Opcion='T' then

select * from Conocemas order by IdConocemas desc limit 4  ;

   End IF;

   END
   $$
   