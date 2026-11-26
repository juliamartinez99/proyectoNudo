-- ============================================================
-- Tabla: producto
-- Compatible con MariaDB 10.2+
-- ============================================================

SET NAMES utf8mb4;

DROP TABLE IF EXISTS producto;

CREATE TABLE producto (
  id              INT AUTO_INCREMENT PRIMARY KEY,
  titulo          VARCHAR(200) NOT NULL,
  descripcion     VARCHAR(500),
  caracteristicas JSON NULL,                 -- array JSON: ["item 1", "item 2", ...]
  marca           VARCHAR(100) NULL,
  composicion     VARCHAR(255) NULL,
  img             VARCHAR(100) NULL,
  precio          DECIMAL(10,2),
  categoria       ENUM('bolsos', 'accesorios') NOT NULL DEFAULT 'bolsos',
  activo          BOOLEAN NOT NULL DEFAULT TRUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO producto
  (titulo, descripcion, caracteristicas, marca, composicion, img, precio, categoria)
VALUES
(
  'BOLSO CLASIC',
  'Bolso de diseño clásico y atemporal, ideal para el día a día y para combinar con cualquier look.',
  '["Cierre con cremallera","Un compartimento principal y bolsillo interior","Asa de mano y correa ajustable","Medidas: 28 x 20 x 10 cm"]',
  'NUDO',
  'Exterior: poliuretano. Forro: poliéster.',
  'img/productos/producto1.jpg', 45.00, 'bolsos'
),
(
  'BOLSO CACAO',
  'Bolso en tono cacao, cálido y elegante, perfecto para looks otoñales y naturales.',
  '["Color marrón cacao","Cierre magnético","Bolsillo interior con cremallera","Medidas: 27 x 19 x 9 cm"]',
  'NUDO',
  'Exterior: poliuretano. Forro: algodón.',
  'img/productos/producto2.jpg', 45.00, 'bolsos'
),
(
  'BOLSO BAMBÚ',
  'Bolso con inspiración natural y acabado artesanal que recuerda al bambú.',
  '["Asa rígida de estilo bambú","Hecho a mano","Cierre con solapa","Medidas: 24 x 18 x 12 cm"]',
  'NUDO',
  'Cuerpo: paja natural. Asa: resina efecto bambú. Forro: algodón.',
  'img/productos/producto3.jpg', 45.00, 'bolsos'
),
(
  'BOLSO LUNA',
  'Bolso de líneas suaves y aire misterioso, inspirado en la luna.',
  '["Forma de media luna","Cierre con cremallera superior","Correa de hombro ajustable","Medidas: 26 x 16 x 7 cm"]',
  'NUDO',
  'Exterior: poliuretano. Forro: poliéster.',
  'img/productos/producto4.jpg', 45.00, 'bolsos'
),
(
  'BOLSO ARENA',
  'Bolso en tono arena, neutro y versátil, ideal para cualquier ocasión.',
  '["Color arena","Interior amplio","Bolsillo interior para móvil","Medidas: 30 x 22 x 11 cm"]',
  'NUDO',
  'Exterior: yute y algodón. Forro: algodón.',
  'img/productos/producto5.jpg', 45.00, 'bolsos'
),
(
  'BOLSO ROSA MALLA',
  'Bolso en rosa con detalle de malla, un toque fresco y femenino para tus outfits.',
  '["Panel de malla transparente","Cierre con cremallera","Asas cortas reforzadas","Medidas: 29 x 21 x 10 cm"]',
  'NUDO',
  'Exterior: poliéster y malla de nylon. Forro: poliéster.',
  'img/productos/producto6.jpg', 45.00, 'bolsos'
),
(
  'BOLSO BRISA',
  'Bolso ligero y fresco, pensado para los días de primavera y verano.',
  '["Muy ligero","Cierre con botón","Asas largas para llevar al hombro","Medidas: 32 x 28 x 12 cm"]',
  'NUDO',
  'Rafia natural. Forro: algodón.',
  'img/productos/producto7.jpg', 45.00, 'bolsos'
),
(
  'BOLSO NOCHE',
  'Bolso en tonos oscuros, elegante y sofisticado para tus planes de noche.',
  '["Color negro","Cierre con solapa y cierre metálico","Cadena dorada desmontable","Medidas: 22 x 14 x 7 cm"]',
  'NUDO',
  'Exterior: poliuretano. Herrajes: metal. Forro: satén.',
  'img/productos/producto8.jpg', 45.00, 'bolsos'
),
(
  'BOLSO FLECOS BOHO',
  'Bolso de estilo boho con flecos, perfecto para un look desenfadado y con personalidad.',
  '["Flecos decorativos","Estilo bohemio","Cierre con cremallera","Medidas: 25 x 20 x 8 cm"]',
  'NUDO',
  'Exterior: ante sintético. Forro: algodón.',
  'img/productos/producto9.jpg', 45.00, 'bolsos'
),
(
  'BOLSO GEOMETRÍA',
  'Bolso con diseño de formas geométricas, moderno y con carácter.',
  '["Estampado geométrico","Cierre con cremallera","Bolsillo exterior trasero","Medidas: 28 x 21 x 9 cm"]',
  'NUDO',
  'Exterior: lona de algodón. Forro: poliéster.',
  'img/productos/producto10.jpg', 45.00, 'bolsos'
),
(
  'BOLSO PLATA',
  'Bolso con acabado plateado que aporta un toque brillante y actual a cualquier conjunto.',
  '["Acabado metalizado","Cierre magnético","Correa de hombro ajustable","Medidas: 24 x 15 x 8 cm"]',
  'NUDO',
  'Exterior: poliuretano metalizado. Forro: poliéster.',
  'img/productos/producto11.jpg', 45.00, 'bolsos'
),
(
  'BOLSO NUDO OSCURO',
  'Bolso oscuro con detalle de nudo, sofisticado y fácil de combinar.',
  '["Asa con detalle de nudo","Color oscuro","Cierre con cremallera","Medidas: 26 x 18 x 10 cm"]',
  'NUDO',
  'Exterior: poliuretano. Forro: poliéster.',
  'img/productos/producto12.jpg', 45.00, 'bolsos'
),
(
  'BOLSO PERLA',
  'Bolso en tono perlado, delicado y elegante, ideal para ocasiones especiales.',
  '["Acabado perlado","Cierre con solapa","Cadena fina desmontable","Medidas: 20 x 13 x 6 cm"]',
  'NUDO',
  'Exterior: poliuretano nacarado. Herrajes: metal. Forro: satén.',
  'img/productos/producto13.jpg', 45.00, 'bolsos'
),
(
  'BOLSO BLUSH',
  'Bolso en suave tono rosado blush, romántico y muy versátil.',
  '["Color rosa blush","Cierre magnético","Bolsillo interior","Medidas: 25 x 18 x 9 cm"]',
  'NUDO',
  'Exterior: poliuretano. Forro: algodón.',
  'img/productos/producto14.jpg', 45.00, 'bolsos'
),
(
  'BOLSO TOTE TIERRA',
  'Bolso tote espacioso en tonos tierra, práctico y cómodo para el día a día.',
  '["Formato tote de gran capacidad","Asas largas reforzadas","Cierre con botón magnético","Medidas: 38 x 32 x 13 cm"]',
  'NUDO',
  'Exterior: lona de algodón. Forro: algodón.',
  'img/productos/producto15.jpg', 45.00, 'bolsos'
),
(
  'BOLSO GEOMETRÍA',
  'Bolso con diseño geométrico y líneas marcadas, una variante moderna de nuestra colección.',
  '["Diseño geométrico en relieve","Cierre con cremallera","Correa de hombro desmontable","Medidas: 27 x 19 x 9 cm"]',
  'NUDO',
  'Exterior: poliuretano. Forro: poliéster.',
  'img/productos/producto16.jpg', 45.00, 'bolsos'
);