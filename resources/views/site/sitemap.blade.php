<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{$site_settings[0]->site_url}}</loc>
        <lastmod>{{$now}}</lastmod>
        <changefreq>Daily</changefreq>
        <priority>0.8</priority>
    </url>

    @foreach($aparts as $apart)
    <url>
        <loc>{{$site_settings[0]->site_url}}/{{$apart['apart_link']}}</loc>
        <lastmod>{{$apart->created_at->toAtomString()}}</lastmod>
        <changefreq>Daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    @foreach($blogs as $blog)
    <url>
        <loc>{{$site_settings[0]->site_url}}/blog-page/{{$blog['link']}}</loc>
        <lastmod>{{$blog->created_at->toAtomString()}}</lastmod>
        <changefreq>Daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

</urlset>