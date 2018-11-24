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
