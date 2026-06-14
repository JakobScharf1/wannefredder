import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogLinkPost } from './blog-link-post';

describe('BlogLinkPost', () => {
  let component: BlogLinkPost;
  let fixture: ComponentFixture<BlogLinkPost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogLinkPost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogLinkPost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
