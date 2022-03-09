# Plugin for SEO markup and generation Sitemap.xml and Robots.txt

The plugin adds functionality to Standard Meta tags and generates Sitemap and Robots files.

> It supports **CMS Pages**, **Static Pages** and **Builder's pages records**.

### Functionality:

- Generation of meta tags (title, description, canonical)
- File generation sitemap.xml and robots.txt
- Add a dynamic list of pages to a file Sitemap.xml. For example, pages created using the **Builder plugin**

#### Some functions are available only in the PRO version of the plugin:

- Close any page from indexing using robots meta tags
- Add the company name at the beginning or at the end of all headings
- Generation of Open Graph micro markup
- SEO meta tag fields support twig syntax
- Insert third-party Meta tags or a third-party script into \<head>

---

#### PRO version of the plugin:
- [SEO PRO Plugin](https://octobercms.com/plugin/eugene3993-seo)

---

## Start using the plugin

You need to connect the components and insert them in the right place in the code and enable the necessary options in the plugin settings

```bash
{% component 'META' %}
```

If you have a custom model that you want to generate the links from, add the full class name of your model in the "Sitemap" tab of the **CMS page**.
If the page has the `blogPost` component, you don't need to set the Model class.

**Important!**: Make sure that all the necessary parameters are enabled on the settings page.

---

> **The plugin has not been tested on OctoberCMS v2.x**

> If you find any errors or typos in the code or interface of the plugin, please let me know

---

If you have any question about how to use this plugin, please don't hesitate to contact us. We're happy to help you.
- telegram: [@Eugene_Kul](https://t.me/eugene_kul)
- email: [gm742445004@gmail.com](mailto:gm742445004@gmail.com)
