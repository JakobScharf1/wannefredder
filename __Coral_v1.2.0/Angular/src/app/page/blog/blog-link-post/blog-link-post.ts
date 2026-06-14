import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { BlogComments } from "../../../components/blog/blog-comments/blog-comments";
import { BlogDesc } from "../../../components/blog/blog-desc/blog-desc";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-blog-link-post',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    SidebarBlog,
    BlogComments,
    BlogDesc,
    Footer
],
  templateUrl: './blog-link-post.html',
  styleUrl: './blog-link-post.scss'
})
export class BlogLinkPost {

}
