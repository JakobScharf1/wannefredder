import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from '../../../components/navbar/navdark/navdark';
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { BlogDesc } from "../../../components/blog/blog-desc/blog-desc";
import { BlogComments } from "../../../components/blog/blog-comments/blog-comments";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-blog-vimeo-post',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    SidebarBlog,
    BlogDesc,
    BlogComments,
    Footer
],
  templateUrl: './blog-vimeo-post.html',
  styleUrl: './blog-vimeo-post.scss'
})
export class BlogVimeoPost {

}
