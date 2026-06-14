import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogHtmlVideoPost } from './blog-html-video-post';

describe('BlogHtmlVideoPost', () => {
  let component: BlogHtmlVideoPost;
  let fixture: ComponentFixture<BlogHtmlVideoPost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogHtmlVideoPost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogHtmlVideoPost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
