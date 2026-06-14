import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from '../../../components/navbar/navdark/navdark';
import { BlogDesc } from "../../../components/blog/blog-desc/blog-desc";
import { BlogComments } from "../../../components/blog/blog-comments/blog-comments";
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-blog-story-post',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    BlogDesc,
    BlogComments,
    SidebarBlog,
    Footer
],
  templateUrl: './blog-story-post.html',
  styleUrl: './blog-story-post.scss'
})
export class BlogStoryPost {

}
