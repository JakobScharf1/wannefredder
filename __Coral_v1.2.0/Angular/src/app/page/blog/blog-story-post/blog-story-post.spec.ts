import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogStoryPost } from './blog-story-post';

describe('BlogStoryPost', () => {
  let component: BlogStoryPost;
  let fixture: ComponentFixture<BlogStoryPost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogStoryPost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogStoryPost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
