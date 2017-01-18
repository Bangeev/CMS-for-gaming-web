

<aside id='sidebar' class='rightColumn'>
    <section>
        <h1 class='ellipsis mail'>Recent Topics</h1>
        <div class='entry'>
            <div class="box argos_last_forum_topics">
                <div class="boxhead_L"><span class="boxhead_titles"><i class="fa fa-comment"></i> {{lang_last}} 5 {{lang_topics_sm}}</span></div>
                <br/>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>{{lang_title}}</td>
                            <td>{{lang_author}}</td>
                            <td>{{lang_date}}</td>
                            <td>{{lang_views}}</td>
                        </tr>
                        {{#last_topics}}
                        <tr>
                            <td><a href="{{topic_link}}" target="_blank">{{ topic_titles }}</a></td>
                            <td >{{ usernames }}</td>
                            <td>{{ topic_time }}</td>
                            <td>{{ topic_views }}</td>
                        </tr>
                        {{/last_topics}}
                    </table>
                </div>
            </div>

            {{#no_menuz2}}
            <div class="box argos_test_menu">
                <div class="boxhead_L"><span class="boxhead_titles"><i class="fa fa-bars"></i> {{lang_test_menu}}</span></div>
                {{&lang_test_menu_text}}
            </div>
            {{/no_menuz2}}
            {{^no_menuz2}}
            {{#get_menus2}}
            <div class="box">
                <div class="boxhead_L"><span class="boxhead_titles"><i class="fa fa-bars"></i> {{menu_title2}}</span></div>
                {{&menu_content2}}
            </div>
            {{/get_menus2}}
            {{/no_menuz2}}

        </div>
    </section>







    <section>
        <h1 class='ellipsis picture'>Gallery Images</h1>
        <div class='entry gallery inlineContainer'>
            <a class='lightbox' href='placeholders/1.jpg'><img src='placeholders/1.jpg' alt='image' /></a>
            <a class='lightbox' href='placeholders/2.jpg'><img src='placeholders/2.jpg' alt='image' /></a>
            <a class='lightbox' href='placeholders/3.jpg'><img src='placeholders/3.jpg' alt='image' /></a>
            <a class='lightbox' href='placeholders/4.jpg'><img src='placeholders/4.jpg' alt='image' /></a>
        </div>
    </section>
</aside>