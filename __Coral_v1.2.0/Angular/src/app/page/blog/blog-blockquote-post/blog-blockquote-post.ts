import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from '../../../components/navbar/navdark/navdark';
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { BlogComments } from "../../../components/blog/blog-comments/blog-comments";
import { BlogDesc } from "../../../components/blog/blog-desc/blog-desc";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-blog-blockquote-post',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    SidebarBlog,
    BlogComments,
    BlogDesc,
    Footer
],
  templateUrl: './blog-blockquote-post.html',
  styleUrl: './blog-blockquote-post.scss'
})
export class BlogBlockquotePost {

}
