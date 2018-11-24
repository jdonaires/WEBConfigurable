Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_ImagenNosotros(
in _IdImagenNosotros  int,
in _Image varchar(45),
in _IdUsuario int,
in _Opcion varchar(45)

 )
BEGIN
 if _Opcion='I' then

insert into ImagenNosotros (Image, IdUsuario) values(_Image, _IdUsuario);


   End IF;

    if _Opcion='D' then

Delete from ImagenNosotros where IdImagenNosotros =_IdImagenNosotros ;


   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_ImagenNosotros(

     in _Opcion varchar(45)
 )
BEGIN


 if _Opcion='T' then

select * from ImagenNosotros order by IdImagenNosotros desc limit 1  ;

   End IF;

   END
   $$


   Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_InfoNosotros(
in _IdInfoNosotros int,
in _Titulo varchar(45),
in _Descripcion varchar(45),
in _Image1 varchar(45),
in _Image2 varchar(45),
in _IdUsuario int,
in _Opcion varchar(45)

 )
BEGIN
 if _Opcion='I' then

insert into infonosotros (Titulo,Descripcion,Image1, Image2, IdUsuario ) values(_Titulo,_Descripcion,_Image1, _Image2, _IdUsuario  );

   End IF;

    if _Opcion='D' then

delete  from infonosotros where IdInfoNosotros = _IdInfoNosotros;

   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_InfoNosotros(

     in _Opcion varchar(45)
 )
BEGIN


 if _Opcion='T' then

select * from InfoNosotros order by idInfoNosotros desc limit 1;

   End IF;

   END
   $$

   Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_Nosotros(
in _IdNosotros int,
in _Descripcion varchar(100),
in _IdUsuario int,
in _Opcion varchar(45)

 )
BEGIN
 if _Opcion='I' then

insert into Nosotros (Descripcion, IdUsuario ) values(_Descripcion, _IdUsuario );

   End IF;

    if _Opcion='D' then

Delete from Nostros where IdNosotros= _IdNosotros;

   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_Nosotros(

     in _Opcion varchar(45)
 )
BEGIN




 if _Opcion='T' then

select * from Nosotros order by IdNosotros desc limit 1;

   End IF;

   END
   $$

   Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_Noticias(
in _IdNoticias  int(11),
in _TituloNoticia varchar(45) ,
in _Descripcion varchar(45) ,
in _Imagen varchar(45) ,
in _URL varchar(45) ,
in _Posicion varchar(45) ,
in _IdUsuario  int(11) ,
in _Opcion varchar(45)

 )
BEGIN
 if _Opcion='I' then

insert into Noticias (TituloNoticia,Descripcion,Imagen,URL,Posicion,IdUsuario) values(_TituloNoticia,_Descripcion,_Imagen,_URL,_Posicion,_IdUsuario);


   End IF;

    if _Opcion='D' then

Delete from Noticias where IdNoticias =_IdNoticias ;


   End If;
   END
   $$

DROP PROCEDURE IF EXISTS PA_Get_Noticias;

DELIMITER $$
 CREATE PROCEDURE PA_Get_Noticias(

     in _Opcion varchar(45)
 )
BEGIN


 if _Opcion='T' then

select * from Noticias  order by IdNoticias desc limit 2  ;

   End IF;

   END
   $$

   Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_Usuario(
in _IdUsuario int,
in _Nombres varchar(45),
     in _Apellidos varchar(45),
     in _Correo varchar(45),
     in _Contraseña varchar(45),
     in _Estado varchar(45),
in _Opcion varchar(45)

 )
BEGIN
 if _Opcion='I' then

insert into Usuario (Nombres, Apellidos,Correo,Contraseña,Estado ) values(_Nombres, _Apellidos,_Correo,_Contraseña,_Estado );

   End IF;

    if _Opcion='D' then

Update Usuario set Estado=_Estado where IdUsuario=_IdUsuario ;

   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_Usuario(
in _Correo varchar(45),
     in _Contraseña varchar(45),
     in _Opcion varchar(45)
 )
BEGIN

 if _Opcion='L' then

select * from usuario where Contraseña=_Contraseña and Correo=_Correo and Estado='A';

   End IF;


 if _Opcion='T' then

select * from usuario order by idusuario desc;

   End IF;

   END
   $$

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

   Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_Slider(
in _IdSlider  int(11) ,
in _Descripcion varchar(45) ,
in _Enlace varchar(45) ,
in _Imagen varchar(45) ,
in _IdUsuario  int(11) ,

in _Opcion varchar(45)

 )
BEGIN
 if _Opcion='I' then

insert into Slider(Descripcion,Enlace,Imagen,IdUsuario) values(_Descripcion,_Enlace,_Imagen,_IdUsuario);




   End IF;

    if _Opcion='D' then

Delete from Slider where IdSlider =_IdSlider ;



   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_Slider(

     in _Opcion varchar(45)
 )
BEGIN


 if _Opcion='T' then

select * from Slider order by IdSlider desc limit 10  ;

   End IF;

   END
   $$

   Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_RedesSociales(
in _IdRedesSociales  int(11) ,
in _Descripcion varchar(45) ,
in _Enlace varchar(45) ,
in _Imagen varchar(45) ,
in _IdUsuario  int(11) ,


in _Opcion varchar(45)

 )
BEGIN
 if _Opcion='I' then

insert into RedesSociales (Descripcion,Enlace,Imagen,IdUsuario) values(_Descripcion,_Enlace,_Imagen,_IdUsuario);





   End IF;

    if _Opcion='D' then
Delete from RedesSociales where IdRedesSociales =_IdRedesSociales ;




   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_RedesSociales(

     in _Opcion varchar(45)
 )
BEGIN


 if _Opcion='T' then

select * from RedesSociales order by IdRedesSociales desc limit 10  ;

   End IF;

   END
   $$

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
