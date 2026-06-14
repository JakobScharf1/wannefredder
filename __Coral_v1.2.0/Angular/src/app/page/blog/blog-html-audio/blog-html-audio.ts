import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { BlogDesc } from "../../../components/blog/blog-desc/blog-desc";
import { BlogComments } from "../../../components/blog/blog-comments/blog-comments";
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-blog-html-audio',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    BlogDesc,
    BlogComments,
    SidebarBlog,
    Footer
],
  templateUrl: './blog-html-audio.html',
  styleUrl: './blog-html-audio.scss'
})
export class BlogHtmlAudio {

}
