<?=
'<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>
<rss version="2.0">
    <channel>
        <title>
            <![CDATA[ Fbox ]]>
        </title>
        <link>
        <![CDATA[ https://fbox.my.id ]]>
        </link>
        <description>
            <![CDATA[ "Fbox adalah website streaming asupan, gore, creepy dan lain lain. ]]>
        </description>
        <language>id</language>
        <pubDate>{{ now() }}</pubDate>

        @foreach ($posts as $post)
            <item>
                <title>
                    <![CDATA[{{ $post->title }}]]>
                </title>
                <link> https://fbox.my.id/post/{{ $post->slug }}</link>
                <description>
                    <![CDATA[Download {{ $post->title }}]]>
                </description>
                <category>{{ $post->category->name }}</category>
                <author>
                    <![CDATA[{{ $post->author->name }}]]>
                </author>
                <guid>{{ $post->id }}</guid>
                <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
