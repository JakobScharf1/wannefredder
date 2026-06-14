import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from '../../../components/navbar/navdark/navdark';
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { BlogComments } from "../../../components/blog/blog-comments/blog-comments";
import { BlogDesc } from "../../../components/blog/blog-desc/blog-desc";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-blog-html-video-post',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    SidebarBlog,
    BlogComments,
    BlogDesc,
    Footer
],
  templateUrl: './blog-html-video-post.html',
  styleUrl: './blog-html-video-post.scss'
})
export class BlogHtmlVideoPost {

}
