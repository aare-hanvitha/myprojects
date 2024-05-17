<?php
class Wordpress implements QuestionsAnswers {
    private $questions;
    private $answers;
    public function Questions() {
        $this->questions = array(
            "1" => "What is Wordpress?",
            "2" => "What are the key components of WordPress?",
            "3" => "What is the difference between WordPress.com and WordPress.org?",
            "4" => "What is a theme in WordPress?",
            "5" => "What are plugins in WordPress?",
            "6" => "What is the role of the wp-config.php file in WordPress?",
            "7" => "How do you optimize a WordPress website for search engines?",
            "8" => "How can you improve the security of a WordPress website?",
            "9" => "What are custom post types and taxonomies in WordPress?",
            "10"=> "How do you troubleshoot common issues in WordPress?",
            "11"=> "What are permalinks in WordPress, and why are they important?",
            "12"=> "How does WordPress handle user authentication and authorization?",
            "13"=> "What are WordPress hooks, and how are they used?",
            "14"=> "Explain the difference between posts and pages in WordPress?",
            "15"=> "Explain the difference between posts and pages in WordPress?",
            "16"=> "How can you improve the performance of a WordPress website?",
            "17"=> "How do you enqueue scripts and styles in WordPress?",
            "18"=> "Explain the WordPress template hierarchy.?",
            "19"=> "How do you create a custom post type in WordPress?",
            "20"=> "What are WordPress shortcodes, and how do you create them?",
            "21"=> "How do you create a custom WordPress widget?",
            "22"=> "Default Database Tables in Wordpress?"

        );
        return $this->questions;
    }
    public function Answers() {
        $this->answers = array(

            "1" => "<pre>
            WordPress is an open-source content management system (CMS) that allows users to easily create and manage websites and blogs. 
            It provides a user-friendly interface and a wide range of themes and plugins for customization.
            </pre>",

            "2" => "<pre>
                > Themes
                > Plugins
                > Database    
            </pre>",

            "3" => "<pre>
            > WordPress.com is a hosted platform where users can create a website for free, 
            but with limited customization options and control. 

            > WordPress.org, on the other hand, provides the open-source software that users can download 
            and install on their own web hosting server, 
            offering full control and customization capabilities.  
            </pre>",

            "4" => "<pre>
            > A theme in WordPress is a collection of templates and stylesheets that determine the appearance and layout of a website. 
            It allows users to change the design of their websites without altering the site's content.
            </pre>",

            "5" => "<pre>
            > Plugins are add-on software components that extend the functionality of WordPress websites. 
            They can be used to add features such as contact forms, e-commerce functionality, SEO optimization, 
            social media integration, and more.
            </pre>",

            "6" => "<pre>
            > The wp-config.php file is a configuration file that contains important settings for WordPress, 
            such as database connection details, security keys, and other advanced options.
            </pre>",

            "7" => "<pre>
            > To optimize a WordPress website for search engines, you can use SEO plugins like Yoast SEO or All in One SEO Pack to optimize meta tags, 
            titles, and descriptions. Additionally, you can create high-quality content, use descriptive permalinks, 
            optimize images, and improve website speed.
            </pre>",

            "8" => "<pre>
            > Regularly updating WordPress, Themes, Plugins.
            > Use strong passwords
            > Limit login attempts
            > Install security plugins
            > Enable HTTPS
            > Use secure hosting.
            </pre>",

            "9" => "<pre>
            Custom post types and taxonomies allow users to organize and display different types of content on their WordPress websites. 
            Custom post types define different content types, such as portfolios or testimonials,
            while taxonomies allow users to classify and group content, such as categories and tags.
            </pre>",

            "10" => "<pre>
             > Deactivating plugins and themes.
             > Checking error logs.
             > Clearing caches.
            </pre>",

            "11" => "<pre>
            Permalinks are the permanent URLs that point to specific pages or posts on a WordPress website. 
            They are essential for SEO because they help search engines understand the structure of the website and 
            improve the usability of links for visitors. WordPress allows users to customize permalinks to include keywords and 
            improve search engine rankings.
            </pre>",

            "12" => "<pre>
            WordPress uses a role-based access control system to manage user authentication and authorization. 
            It provides several default user roles, such as Administrator, Editor, Author, Contributor, and Subscriber, 
            each with different capabilities and permissions. Administrators can create, edit, and delete users and assign them roles, 
            while users can log in with their credentials and access features based on their assigned roles.
            </pre>",

            "13" => "<pre>
            WordPress hooks are functions that allow developers to modify or extend the functionality of WordPress core, 
            themes, and plugins without directly editing their code. 
            There are two types of hooks: action hooks and filter hooks. 
            Action hooks allow developers to execute custom code at specific points in WordPress execution, 
            while filter hooks enable developers to modify data before it is displayed or processed.
            </pre>",

            "14" => "<pre>
            WordPress hooks are functions that allow developers to modify or extend the functionality of WordPress core, 
            themes, and plugins without directly editing their code. 
            There are two types of hooks: action hooks and filter hooks. 
            Action hooks allow developers to execute custom code at specific points in WordPress execution, 
            while filter hooks enable developers to modify data before it is displayed or processed.
            </pre>",

            "15" => "<pre>
            Posts are dynamic content entries displayed in reverse chronological order on the blog page. 
            They are typically used for time-sensitive content such as articles, news updates, or blog posts. 
            Pages, on the other hand, are static content that are not displayed in chronological order. 
            They are used for timeless content such as About Us, Contact, or Services pages.
            </pre>",

            "16" => "<pre>
                Improving the performance of a WordPress website involves optimizing various aspects such as
                > Hosting
                > Caching
                > Image Optimization
                > Code Optimization
                > Minimizing HTTP requests
                > Using a content delivery network (CDN)
                > Implementing lazy loading
                > Using lightweight themes and plugins
            </pre>",

            "17" => "<pre>
                In WordPress, you can enqueue scripts and styles using the wp_enqueue_script() and wp_enqueue_style() functions, respectively.
                These functions are typically used within the functions.php file of a theme or plugin. 
                By enqueuing scripts and styles, you ensure that they are loaded in the correct order and only when necessary, 
                improving performance and avoiding conflicts.
            </pre>",

            "18" => "<pre>
                The WordPress template hierarchy determines which template file is used to display a particular type of content on a website.
                For example, if you're viewing a single post, WordPress will first look for single-{post-type}.php, 
                then single.php, and finally index.php if no specific template is found.
            </pre>",

            "19" => "<pre>
            To create a custom post type in WordPress, you can use the register_post_type() function. 
            This function allows you to define various parameters for the custom post type, such as its name, labels, capabilities, 
            and supported features. You typically add this code to the functions.php file of your theme or a custom plugin.
            </pre>",

            "20" => "<pre>
            WordPress shortcodes are placeholders that allow users to add dynamic content, such as forms, galleries, or videos, to posts, pages, or widgets 
            without writing HTML or PHP code.To create a shortcode, you define a callback function using the add_shortcode() function, 
            which takes the shortcode tag and the callback function as parameters. Inside the callback function, you generate and return 
            the HTML or content you want to display.
            </pre>",

            "21" => "<pre>
            To create a custom WordPress widget, you need to create a class that extends the WP_Widget class and implements its methods,
            such as __construct(), widget(), and form(). In the __construct() method, you define the widget's ID, name, and description. 
            The widget() method is responsible for displaying the widget's content on the front end, while the form() method generates 
            the widget's form fields in the WordPress admin area.
            </pre>",

            "21" => "<pre>
            1. wp_options
            2. wp_users
            3. wp_usermeta
            4. wp_posts
            5. wp_postmeta
            6. wp_comments
            7. wp_commentmeta
            8. wp_terms
            9. wp_term_taxonomy
            10. wp_term_relationships
            11. wp_links
            12. wp_options
            </pre>"

        );
        return $this->answers;
    }

}
?>
