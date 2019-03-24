/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     24/03/2019 5:24:54 p. m.                     */
/*==============================================================*/


/*==============================================================*/
/* Table: ASISTENCIAS                                           */
/*==============================================================*/
create table ASISTENCIAS (
   ID_ASISTENCIAS       SERIAL               not null,
   ID_USUARIO           INT4                 null,
   ID_CLASE             INT4                 null,
   ASISTECIAS           INT4                 not null,
   INASISTENIAS         INT4                 not null,
   constraint PK_ASISTENCIAS primary key (ID_ASISTENCIAS)
);

/*==============================================================*/
/* Index: ASISTENCIAS_PK                                        */
/*==============================================================*/
create unique index ASISTENCIAS_PK on ASISTENCIAS (
ID_ASISTENCIAS
);

/*==============================================================*/
/* Index: REL_USUARIO_ASISTENCIA2_FK                            */
/*==============================================================*/
create  index REL_USUARIO_ASISTENCIA2_FK on ASISTENCIAS (
ID_USUARIO
);

/*==============================================================*/
/* Index: ASISTENCIA_CLASE_FK                                   */
/*==============================================================*/
create  index ASISTENCIA_CLASE_FK on ASISTENCIAS (
ID_CLASE
);

/*==============================================================*/
/* Table: CLASES                                                */
/*==============================================================*/
create table CLASES (
   ID_CLASE             SERIAL               not null,
   ID_ESPACIO_DEPORTIVO INT4                 null,
   CUPOS                INT4                 null,
   constraint PK_CLASES primary key (ID_CLASE)
);

/*==============================================================*/
/* Index: CLASES_PK                                             */
/*==============================================================*/
create unique index CLASES_PK on CLASES (
ID_CLASE
);

/*==============================================================*/
/* Index: RELATIONSHIP_4_FK                                     */
/*==============================================================*/
create  index RELATIONSHIP_4_FK on CLASES (
ID_ESPACIO_DEPORTIVO
);

/*==============================================================*/
/* Table: ESPACIOS                                              */
/*==============================================================*/
create table ESPACIOS (
   ID_ESPACIO           SERIAL               not null,
   ID_SEDE              INT4                 null,
   CANTIDAD_USUARIOS    INT4                 null,
   constraint PK_ESPACIOS primary key (ID_ESPACIO)
);

/*==============================================================*/
/* Index: ESPACIOS_PK                                           */
/*==============================================================*/
create unique index ESPACIOS_PK on ESPACIOS (
ID_ESPACIO
);

/*==============================================================*/
/* Table: ESPACIOS_DEPORTIVO                                    */
/*==============================================================*/
create table ESPACIOS_DEPORTIVO (
   ID_ESPACIO_DEPORTIVO SERIAL               not null,
   ID_USUARIO           INT4                 null,
   NOMBRE_ESPACIO       CHAR(24)             not null,
   constraint PK_ESPACIOS_DEPORTIVO primary key (ID_ESPACIO_DEPORTIVO)
);

/*==============================================================*/
/* Index: ESPACIOS_DEPORTIVO_PK                                 */
/*==============================================================*/
create unique index ESPACIOS_DEPORTIVO_PK on ESPACIOS_DEPORTIVO (
ID_ESPACIO_DEPORTIVO
);

/*==============================================================*/
/* Index: REL_ESPACIO_USUARIO_FK                                */
/*==============================================================*/
create  index REL_ESPACIO_USUARIO_FK on ESPACIOS_DEPORTIVO (
ID_USUARIO
);

/*==============================================================*/
/* Table: ESTADOS                                               */
/*==============================================================*/
create table ESTADOS (
   ID_ESTADO            SERIAL               not null,
   ID_RESERVA           INT4                 null,
   APROBADO             CHAR(12)             null,
   CANCELADO            CHAR(12)             null,
   RESERVADO            CHAR(12)             null,
   constraint PK_ESTADOS primary key (ID_ESTADO)
);

/*==============================================================*/
/* Index: ESTADOS_PK                                            */
/*==============================================================*/
create unique index ESTADOS_PK on ESTADOS (
ID_ESTADO
);

/*==============================================================*/
/* Index: ESTADO_RESERVA2_FK                                    */
/*==============================================================*/
create  index ESTADO_RESERVA2_FK on ESTADOS (
ID_RESERVA
);

/*==============================================================*/
/* Table: REL_CLASE_USUARIO                                     */
/*==============================================================*/
create table REL_CLASE_USUARIO (
   ID_USUARIO           INT4                 not null,
   ID_CLASE             INT4                 not null,
   constraint PK_REL_CLASE_USUARIO primary key (ID_USUARIO, ID_CLASE)
);

/*==============================================================*/
/* Index: REL_CLASE_USUARIO_PK                                  */
/*==============================================================*/
create unique index REL_CLASE_USUARIO_PK on REL_CLASE_USUARIO (
ID_USUARIO,
ID_CLASE
);

/*==============================================================*/
/* Index: REL_CLASE_USUARIO2_FK                                 */
/*==============================================================*/
create  index REL_CLASE_USUARIO2_FK on REL_CLASE_USUARIO (
ID_CLASE
);

/*==============================================================*/
/* Index: REL_CLASE_USUARIO_FK                                  */
/*==============================================================*/
create  index REL_CLASE_USUARIO_FK on REL_CLASE_USUARIO (
ID_USUARIO
);

/*==============================================================*/
/* Table: RESERVAS                                              */
/*==============================================================*/
create table RESERVAS (
   ID_RESERVA           SERIAL               not null,
   ID_ESTADO            INT4                 null,
   ID_ESPACIO           INT4                 null,
   ID_CLASE             INT4                 null,
   constraint PK_RESERVAS primary key (ID_RESERVA)
);

/*==============================================================*/
/* Index: RESERVAS_PK                                           */
/*==============================================================*/
create unique index RESERVAS_PK on RESERVAS (
ID_RESERVA
);

/*==============================================================*/
/* Index: ESTADO_RESERVA_FK                                     */
/*==============================================================*/
create  index ESTADO_RESERVA_FK on RESERVAS (
ID_ESTADO
);

/*==============================================================*/
/* Index: REL_ESPACIO_RESERVA_FK                                */
/*==============================================================*/
create  index REL_ESPACIO_RESERVA_FK on RESERVAS (
ID_ESPACIO
);

/*==============================================================*/
/* Index: REL_RESERVA_CLASE_FK                                  */
/*==============================================================*/
create  index REL_RESERVA_CLASE_FK on RESERVAS (
ID_CLASE
);

/*==============================================================*/
/* Table: ROLES                                                 */
/*==============================================================*/
create table ROLES (
   ID_ROL               SERIAL               not null,
   NOMBRE_ROL           CHAR(24)             null,
   constraint PK_ROLES primary key (ID_ROL)
);

/*==============================================================*/
/* Index: ROLES_PK                                              */
/*==============================================================*/
create unique index ROLES_PK on ROLES (
ID_ROL
);

/*==============================================================*/
/* Table: USUARIOS                                              */
/*==============================================================*/
create table USUARIOS (
   ID_USUARIO           SERIAL               not null,
   ID_ROL               INT4                 not null,
   ID_ASISTENCIAS       INT4                 null,
   NUMERO_DOCUMENTO     CHAR(32)             not null,
   APELLIDO             CHAR(32)             not null,
   CODIGO               CHAR(32)             null,
   CORREO               CHAR(32)             null,
   CELULAR              CHAR(32)             null,
   FOTO                 CHAR(256)            null,
   PASSWORD             CHAR(32)             null,
   USUARIO              CHAR(32)             null,
   ACTIVO               BOOL                 null,
   constraint PK_USUARIOS primary key (ID_USUARIO)
);

/*==============================================================*/
/* Index: USUARIOS_PK                                           */
/*==============================================================*/
create unique index USUARIOS_PK on USUARIOS (
ID_USUARIO
);

/*==============================================================*/
/* Index: REL_ROL_USUARIO_FK                                    */
/*==============================================================*/
create  index REL_ROL_USUARIO_FK on USUARIOS (
ID_ROL
);

/*==============================================================*/
/* Index: REL_USUARIO_ASISTENCIA_FK                             */
/*==============================================================*/
create  index REL_USUARIO_ASISTENCIA_FK on USUARIOS (
ID_ASISTENCIAS
);

alter table ASISTENCIAS
   add constraint FK_ASISTENC_ASISTENCI_CLASES foreign key (ID_CLASE)
      references CLASES (ID_CLASE)
      on delete restrict on update restrict;

alter table ASISTENCIAS
   add constraint FK_ASISTENC_REL_USUAR_USUARIOS foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO)
      on delete restrict on update restrict;

alter table CLASES
   add constraint FK_CLASES_RELATIONS_ESPACIOS foreign key (ID_ESPACIO_DEPORTIVO)
      references ESPACIOS_DEPORTIVO (ID_ESPACIO_DEPORTIVO)
      on delete restrict on update restrict;

alter table ESPACIOS_DEPORTIVO
   add constraint FK_ESPACIOS_REL_ESPAC_USUARIOS foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO)
      on delete restrict on update restrict;

alter table ESTADOS
   add constraint FK_ESTADOS_ESTADO_RE_RESERVAS foreign key (ID_RESERVA)
      references RESERVAS (ID_RESERVA)
      on delete restrict on update restrict;

alter table REL_CLASE_USUARIO
   add constraint FK_REL_CLAS_REL_CLASE_USUARIOS foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO)
      on delete restrict on update restrict;

alter table REL_CLASE_USUARIO
   add constraint FK_REL_CLAS_REL_CLASE_CLASES foreign key (ID_CLASE)
      references CLASES (ID_CLASE)
      on delete restrict on update restrict;

alter table RESERVAS
   add constraint FK_RESERVAS_ESTADO_RE_ESTADOS foreign key (ID_ESTADO)
      references ESTADOS (ID_ESTADO)
      on delete restrict on update restrict;

alter table RESERVAS
   add constraint FK_RESERVAS_REL_ESPAC_ESPACIOS foreign key (ID_ESPACIO)
      references ESPACIOS (ID_ESPACIO)
      on delete restrict on update restrict;

alter table RESERVAS
   add constraint FK_RESERVAS_REL_RESER_CLASES foreign key (ID_CLASE)
      references CLASES (ID_CLASE)
      on delete restrict on update restrict;

alter table USUARIOS
   add constraint FK_USUARIOS_REL_ROL_U_ROLES foreign key (ID_ROL)
      references ROLES (ID_ROL)
      on delete restrict on update restrict;

alter table USUARIOS
   add constraint FK_USUARIOS_REL_USUAR_ASISTENC foreign key (ID_ASISTENCIAS)
      references ASISTENCIAS (ID_ASISTENCIAS)
      on delete restrict on update restrict;

