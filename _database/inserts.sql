INSERT INTO heartcore_tattoo.simple_site_article_template (id, code, file) VALUES (1, 'default', 'BaseArticle.latte');
INSERT INTO heartcore_tattoo.simple_site_navigation_template (id, code, file) VALUES (2, 'default', 'NavigationControl.latte');

INSERT INTO heartcore_tattoo.simple_site_article (id, template_id, code, route, content) VALUES (1, 1, 'default', '/', 'Hello World!');

INSERT INTO heartcore_tattoo.simple_site_navigation (id, template_id, code, title, max_recursion) VALUES (1, 2, 'default', 'defaultNav', null);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (1, null, 'tattoo', 'TATTOO', 1, 0);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (2, null, 'piercing', 'PIERCING', 1, 1);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (4, null, 'odstraneni-tetovani', 'ODSTRANĚNÍ TETOVÁNÍ', 1, 3);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (5, null, 'ukazky-prace', 'UKÁZKY PRÁCE', 1, 4);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (6, null, 'kontakt', 'KONTAKT', 1, 5);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (7, null, 'scarifikace', 'SCARIFIKACE', 1, 2);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (8, 1, 'informace', 'INFORMACE', null, 0);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (9, 1, 'cenik', 'CENÍK', null, 1);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (10, 1, 'pece-o-tetovani', 'PÉČE O TETOVÁNÍ', null, 2);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (11, 2, 'informace', 'INFORMACE', null, 0);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (12, 2, 'cenik', 'CENÍK', null, 1);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (13, 2, 'pece-o-piercing', 'PÉČE O PIERCING', null, 2);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (15, 4, 'informace', 'INFORMACE', null, 0);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (16, 4, 'cenik', 'CENÍK', null, 1);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (17, 4, 'galerie', 'GALERIE', null, 2);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (18, 5, 'viktor-tetovani', 'VIKTOR - TETOVÁNÍ', null, 0);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (19, 5, 'hostr-tetovani', 'HORST - TETOVÁNÍ', null, 1);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (20, 5, 'piercing', 'PIERCING', null, 2);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (21, 5, 'scarifikace', 'SCARIFIKACE', null, 3);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (22, 5, 'odstraneni-tetovani', 'ODSTRANĚNÍ TETOVÁNÍ', null, 4);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (23, 7, 'informace', 'INFORMACE', null, 0);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (24, 7, 'cenik', 'CENÍK', null, 1);
INSERT INTO heartcore_tattoo.simple_site_navigation_item (id, parent_navigation_item_id, code, title, direct_descendant_of_navigation_id, sort) VALUES (25, 7, 'galerie', 'GALERIE', null, 2);
