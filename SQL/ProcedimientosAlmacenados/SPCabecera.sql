Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_Cabecera(
in _IdContacto  int(11) ,
in _NombreOrganizacion varchar(45) ,
in _Email varchar(45) ,
in _Telefono varchar(45) ,
in _Logotipo varchar(45) ,
in _IdUsuario  int(11) ,
in _Opcion varchar(45) 

 )
BEGIN
 if _Opcion='I' then

insert into Cabecera (NombreOrganizacion,Email,Telefono,Logotipo,IdUsuario) values(_NombreOrganizacion,_Email,_Telefono,_Logotipo,_IdUsuario);



   End IF;

    if _Opcion='D' then

Delete from Cabecera where IdContacto =_IdContacto ;


   
   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_Cabecera(

     in _Opcion varchar(45)
 )
BEGIN
  
   
 if _Opcion='T' then

select * from Cabecera order by IdContacto desc limit 1  ;

   End IF;

   END
   $$
   