import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexBusiness } from './index-business';

describe('IndexBusiness', () => {
  let component: IndexBusiness;
  let fixture: ComponentFixture<IndexBusiness>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexBusiness]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexBusiness);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
